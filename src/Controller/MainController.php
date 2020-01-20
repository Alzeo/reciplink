<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Entity\Recipe;
use App\Entity\RecipeSearch;
use App\Entity\RecipeSearchPlat;
use App\Entity\User;
use App\Form\NewsType;
use App\Form\RecipeSearchPlatType;
use App\Form\RecipeSearchType;
use App\Form\RegisterType;
use App\Repository\PostRepository;
use App\Repository\RecipeRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter ;

class MainController extends AbstractController
{

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * @Route("/", name="home")
     * @param RecipeRepository $recipeRepository
     * @param Recipe $recipe
     */
    public function index(Request $request, RecipeRepository $recipeRepository, PostRepository $postRepository)
    {

        $news = new Newsletter();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();
            $this->addFlash('success', 'Vous avez été ajouté à la newsletter');
            return $this->redirectToRoute('home');
        }

        $posts = $postRepository->findByPublish(true);


        $recipes = $recipeRepository->findLatest();

        $user = $this->security->getUser();
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
            'form' => $form->createView(),
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, MailerInterface $mailer){
        $register = new User();
        $form = $this->createForm(RegisterType::class, $register);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $register->setRoles('ROLE_USER');
            $password = $passwordEncoder->encodePassword($register, $register->getPassword());
            $register->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($register);
            $entityManager->flush();
            $email = (new Email())
                ->from('contact@figuy.fr')
                ->to('jardisindustrie@gmail.com')
                ->subject('Nouvel inscription sur le site !')
                ->html("<h3>Un nouveau membre parmis nous !</h3><p>Bienvenue à" . $register->getUsername() .  "</p>");
            $mailer->send($email);
            $this->addFlash('success', "Vous êtes inscrit ! Vous pouvez maintenant vous connecter.");
            return $this->redirectToRoute('app_login', [ 'user' => 'null'
            ]);
        }
        return $this->render('main/register.html.twig', [
            'current_menu' => 'panel',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/recettes", name="discover")
     */
    public function allRecipes(Request $request, RecipeRepository $recipeRepository, PaginatorInterface $paginator): Response {
        $user = $this->security->getUser();
        $search = new RecipeSearch();
        $form = $this->createForm(RecipeSearchType::class, $search);
        $form->handleRequest($request);
        $recipes = $paginator->paginate($recipeRepository->findAllVisibleQuery($search),
            $request->query->getInt('page', 1),
            12/*page number*/
        );
       $totalRecipe = count($recipes);
        dump($totalRecipe);

        return $this->render('main/discover.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/cuisine/{username}", name="kitchen_user")
     * @Entity("User", expr="repository.find(idUser)")
     * @return Response
     */
    public function userKitchen($username, PaginatorInterface $paginator, RecipeRepository $recipeRepository, UserRepository $userRepository, Request $request) {

        $currentUser = $this->getUser();
        $profil = $userRepository->findOneBy(['username' => $username]);
        $profilRecipes = $paginator->paginate($recipeRepository->findBy(['user' => $profil, 'publish' => true]),
            $request->query->getInt('page', 1),
            6/*page number*/
        );

        $countRecipes = count($recipeRepository->findBy(['user' => $profil, 'publish' => true]));

        return $this->render('main/profilUser.html.twig', [
            'controller_name' => 'MainController',
            'profilRecipes' => $profilRecipes,
            'user' => $currentUser,
            'profile' => $profil,
            'countRecipes' => $countRecipes
        ]);
    }

    /**
     * @Route("/recettes/paleo", name="paleo_recipe")
     */
    public function paleoRecipes(Request $request, RecipeRepository $recipeRepository, PaginatorInterface $paginator): Response {
        $user = $this->security->getUser();
        $search = new RecipeSearchPlat();
        $form = $this->createForm(RecipeSearchPlatType::class, $search);
        $form->handleRequest($request);
        $recipes = $paginator->paginate($recipeRepository->findAllPaleoVisibleQuery($search),
            $request->query->getInt('page', 1),
            12/*page number*/
        );
        $totalRecipe = count($recipes);
        dump($totalRecipe);

        return $this->render('main/paleo.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/recettes/vegan", name="vegan_recipe")
     */
    public function veganRecipes(Request $request, RecipeRepository $recipeRepository, PaginatorInterface $paginator): Response {
        $user = $this->security->getUser();
        $search = new RecipeSearchPlat();
        $form = $this->createForm(RecipeSearchPlatType::class, $search);
        $form->handleRequest($request);
        $recipes = $paginator->paginate($recipeRepository->findAllVeganVisibleQuery($search),
            $request->query->getInt('page', 1),
            12/*page number*/
        );
        $totalRecipe = count($recipes);
        dump($totalRecipe);

        return $this->render('main/vegan.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/recettes/vegetarien", name="vegetarien_recipe")
     */
    public function vegetarienRecipes(Request $request, RecipeRepository $recipeRepository, PaginatorInterface $paginator): Response {
        $user = $this->security->getUser();
        $search = new RecipeSearchPlat();
        $form = $this->createForm(RecipeSearchPlatType::class, $search);
        $form->handleRequest($request);
        $recipes = $paginator->paginate($recipeRepository->findAllVegetarienVisibleQuery($search),
            $request->query->getInt('page', 1),
            12/*page number*/
        );
        $totalRecipe = count($recipes);
        dump($totalRecipe);

        return $this->render('main/vegetarien.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/recettes/vegetalien", name="vegetalien_recipe")
     */
    public function vegetalienRecipes(Request $request, RecipeRepository $recipeRepository, PaginatorInterface $paginator): Response {
        $user = $this->security->getUser();
        $search = new RecipeSearchPlat();
        $form = $this->createForm(RecipeSearchPlatType::class, $search);
        $form->handleRequest($request);
        $recipes = $paginator->paginate($recipeRepository->findAllVegetalienVisibleQuery($search),
            $request->query->getInt('page', 1),
            12/*page number*/
        );
        $totalRecipe = count($recipes);
        dump($totalRecipe);

        return $this->render('main/vegetalien.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/apropos", name="main_about")
     */
    public function about(){
        return $this->render('main/about.html.twig');
    }

    /**
     * @Route("/cgu", name="main_cgu")
     */
    public function cgu(){
        return $this->render('main/cgu.html.twig');
    }
}
