<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Entity\RecipeComment;
use App\Entity\RecipeLike;
use App\Entity\RecipeSave;
use App\Entity\User;
use App\Form\RecipeCommentType;
use App\Form\RecipeType;
use App\Repository\RecipeCommentRepository;
use App\Repository\RecipeLikeRepository;
use App\Repository\RecipeRepository;
use App\Repository\RecipeSaveRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Egulias\EmailValidator\Warning\CFWSNearAt;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter ;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security as Secur;
use Symfony\Component\Security\Core\Security;
/**
 * @Route("/recette")
 */
class RecipeController extends AbstractController
{

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    /**
     * @Route("/", name="recipe_index", methods={"GET"})
     */
    public function index(RecipeRepository $recipeRepository): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        return $this->render('recipe/index.html.twig', [
            'recipes' => $recipeRepository->findBy(
                ['user' => $user]
            ),
            'user' => $user
        ]);
    }

    /**
     * @Route("/nouvelle", name="recipe_new", methods={"GET","POST"})
     * @IsGranted("ROLE_USER")
     */
    public function new(Request $request, MailerInterface $mailer): Response
    {
        $user = $this->getUser();
        $username = $user->getUsername();
        $recipe = new Recipe();

        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $recipeLike = new RecipeLike();
            $recipeLike->setRecipe($recipe);
            $recipe->setUser($user);
            $recipe->setPublish(false);
            $recipe->setCreatedAt(new \DateTime('now'));

            /** @var UploadedFile $picture */
            $picture = $form['picture']->getData();

            if ($picture) {
                $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = 'recipelink'.'-'.uniqid().'.'.$picture->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $picture->move(
                        $this->getParameter('recipes_image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $recipe->setPicture($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($recipe);
            $entityManager->flush();
            $email = (new Email())
                ->from('contact@figuy.fr')
                ->to('jardisindustrie@gmail.com')
                ->subject('Nouvel recette à modérer !')
                ->html("<h3>Nouvelle recette vient d'être postée !</h3>");
            $mailer->send($email);
            $this->addFlash('success', "Votre recette à bien été enregistrée, elle est en cours de validation, vous pouvez néanmoins la partager via votre espace recette. ");
            return $this->redirectToRoute('user_my_recipes');
        }

        return $this->render('recipe/new.html.twig', [
            'recipe' => $recipe,
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/{slug}", name="recipe_show", methods={"GET","POST"})
     * @param Recipe $recipe
     * @param PaginatorInterface $paginator
     * @param RecipeRepository $recipeRepository
     * @param RecipeCommentRepository $commentRepository
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function show($slug, Recipe $recipe, PaginatorInterface $paginator, RecipeRepository $recipeRepository, RecipeCommentRepository $commentRepository, MailerInterface $mailer, Request $request): Response
    {
        $commentaires = $paginator->paginate($commentRepository->findBy([
            'recipe' => $recipe,
            'publish' => true
        ],['created_at' => 'desc']),
            $request->query->getInt('page', 1),
            10/*page number*/
        );

        $countComments = $commentRepository->findBy(['recipe' => $recipe, 'publish' => true]);

        $user = $this->security->getUser();
        $author = $recipeRepository->findOneBySlug($slug);
        $author = $author->getUser()->getEmail();

        $commentaire = new RecipeComment();

        $form = $this->createForm(RecipeCommentType::class, $commentaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $commentaire->setRecipe($recipe);
            $commentaire->setUser($user);
            $commentaire->setCreatedAt(new \DateTime('now'));
            $commentaire->setPublish(false);
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($commentaire);
            $doctrine->flush();
            $this->addFlash('success', "Merci pour votre commentaire ! Il sera visible lorsqu'il aura été vérifié.");
            unset($commentaire);
            unset($form);
            $commentaire = new RecipeComment();
            $form = $this->createForm(RecipeCommentType::class, $commentaire);
            return $this->render('recipe/show.html.twig', [
                'recipe' => $recipe,
                'userRecipe' => $recipe->getUser(),
                'user' => $user,
                'commentaires' => $commentaires,
                'form' => $form->createView(),
                'id' => $recipe->getId(),
                'countComments' => $countComments
            ]);
        }

        return $this->render('recipe/show.html.twig', [
            'recipe' => $recipe,
            'userRecipe' => $recipe->getUser(),
            'user' => $user,
            'commentaires' => $commentaires,
            'form' => $form->createView(),
            'countComments' => $countComments
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="recipe_edit", methods={"GET","POST"})
     * @Secur("is_granted('ROLE_USER') and user === recipe.getUser()", message="Vous n'êtes pas l'auteur de cette recette vous ne pouvez donc pas la modifier")
     */
    public function edit(Request $request, Recipe $recipe): Response
    {
        $user = $this->security->getUser();

        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recipe_index');
        }

        return $this->render('recipe/edit.html.twig', [
            'recipe' => $recipe,
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/{slug}/delete", name="recipe_delete")
     * $Secur("is_granted("ROLE_USER") and user === recipe.getUser())
     */
    public function delete(Request $request, Recipe $recipe): Response
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($recipe);
            $entityManager->flush();
            $this->addFlash('success', "La recette {$recipe->getName()}a bien été supprimé !");

            return $this->redirectToRoute('user_show');
    }

    /**
     * @Route("/{id}/like", name="recipe_like")
     * @param Recipe $recipe
     * @param $likeRepo
     * @return Response
     */
    public function like(Recipe $recipe, RecipeLikeRepository $likeRepo) : Response {

        $user =$this->getUser();

        if($recipe->isLikeByUser($user)){
            $like = $likeRepo->findOneBy([
                'recipe' => $recipe,
                'user' => $user
            ]);

            $em = $this->getDoctrine()->getManager();
            $em->remove($like);
            $em->flush();
            return $this->json([
                'code' => 200,
                'message' => 'Like bien supprimé',
                'likes' => $likeRepo->count(['recipe' => $recipe])
            ], 200);
        }

        $like = new RecipeLike();
        $like->setRecipe($recipe)
            ->setUser($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($like);
        $em->flush();


        return $this->json([
            'code' => 200,
            'message' => 'Like bien ajouté',
            'likes' => $likeRepo->count(['recipe' => $recipe])
        ], 200);
    }

    /**
     * @Route("/{id}/unsave", name="recipe_unsave")
     * @param Recipe $recipe
     * @param RecipeSaveRepository $recipeSaveRepository
     * @return Response
     */
    public function unsave(Recipe $recipe, RecipeSaveRepository $recipeSaveRepository) : Response
    {

        $user = $this->getUser();

        if ($recipe->isSaveByUser($user)) {
            $save = $recipeSaveRepository->findOneBy([
                'recipe' => $recipe,
                'user' => $user
            ]);

            $em = $this->getDoctrine()->getManager();
            $em->remove($save);
            $em->flush();
            return $this->redirectToRoute('recipe_show', [
                'recipe' => $recipe,
                'userRecipe' => $recipe->getUser(),
                'user' => $user,
                'slug' => $recipe->getSlug(),
            ]);

        }
    }

    /**
     * @Route("/{id}/save", name="recipe_save")
     * @param Recipe $recipe
     * @param RecipeSaveRepository $recipeSaveRepository
     * @return Response
     */
    public function save(Recipe $recipe, RecipeSaveRepository $recipeSaveRepository) : Response {

        $user =$this->getUser();

        $save = new RecipeSave();
        $save->setRecipe($recipe)
            ->setUser($user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($save);
        $em->flush();

        return $this->redirectToRoute('recipe_show', [
            'recipe' => $recipe,
            'userRecipe' => $recipe->getUser(),
            'user' => $user,
            'slug' => $recipe->getSlug(),
        ]);
    }

}
