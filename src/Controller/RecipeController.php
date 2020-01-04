<?php

namespace App\Controller;

use App\Entity\Love;
use App\Entity\Recipe;
use App\Entity\RecipeFood;
use App\Entity\RecipeLike;
use App\Entity\RecipeSave;
use App\Entity\User;
use App\Form\RecipeType;
use App\Repository\LikeRepository;
use App\Repository\LoveRepository;
use App\Repository\RecipeLikeRepository;
use App\Repository\RecipeRepository;
use App\Repository\RecipeSaveRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter ;

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
     */
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $username = $user->getUsername();
        $recipe = new Recipe();
        $recipeLike = new RecipeLike();
        $recipeLike->setRecipe($recipe);
        $recipe->setUser($user);
        $recipe->setPublish(true);

        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

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

            return $this->redirectToRoute('recipe_index', [
                'user' => $user,
                'username' => $username
            ]);
        }

        return $this->render('recipe/new.html.twig', [
            'recipe' => $recipe,
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/{id}", name="recipe_show", methods={"GET"})
     * @param Recipe $recipe
     * @param RecipeRepository $recipeRepository
     * @param Love $love
     * @param LoveRepository $loveRepository
     * @param UserRepository $userRepository
     * @return Response
     */
    public function show(Recipe $recipe, RecipeRepository $recipeRepository): Response
    {

        $user = $this->security->getUser();

        return $this->render('recipe/show.html.twig', [
            'recipe' => $recipe,
            'userRecipe' => $recipe->getUser(),
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="recipe_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Recipe $recipe): Response
    {
        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recipe_index');
        }

        return $this->render('recipe/edit.html.twig', [
            'recipe' => $recipe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="recipe_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Recipe $recipe): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recipe->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($recipe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('recipe_index');
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
                'id' => $recipe->getId(),
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
            'id' => $recipe->getId(),
        ]);
    }

}
