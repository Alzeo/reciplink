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
use App\Repository\RecipeRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
    public function index(Request $request, RecipeRepository $recipeRepository)
    {

        $news = new Newsletter();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }


        $recipes = $recipeRepository->findLatest();

        $user = $this->security->getUser();
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $register = new User();
        $register->setRoles(['ROLE_USER']);
        $form = $this->createForm(RegisterType::class, $register);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($register, $register->getPassword());
            $register->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($register);
            $entityManager->flush();
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
     * @Route("/profil/{idUser}", name="kitchen_user")
     * @Entity("User", expr="repository.find(idUser)")
     * @return Response
     */
    public function userKitchen($idUser, PaginatorInterface $paginator, RecipeRepository $recipeRepository, UserRepository $userRepository, Request $request) {

        $currentUser = $this->getUser();
        $profil = $userRepository->findOneBy(['id' => $idUser]);
        $profilRecipes = $paginator->paginate($recipeRepository->findBy(['user' => $profil, 'publish' => true]),
            $request->query->getInt('page', 1),
            6/*page number*/
        );

        return $this->render('main/profilUser.html.twig', [
            'controller_name' => 'MainController',
            'profilRecipes' => $profilRecipes,
            'user' => $currentUser,
            'profile' => $profil
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
        $recipes = $paginator->paginate($recipeRepository->findAllVeganVisibleQuery($search),
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
        $recipes = $paginator->paginate($recipeRepository->findAllVeganVisibleQuery($search),
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
}
