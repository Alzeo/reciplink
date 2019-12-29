<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Entity\User;
use App\Form\RegisterType;
use App\Repository\RecipeRepository;
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
     * @Route("/", name="main")
     * @param RecipeRepository $recipeRepository
     * @param Recipe $recipe
     */
    public function index(Request $request, RecipeRepository $recipeRepository)
    {

        $recipes = $recipeRepository->findAll();
        $user = $this->security->getUser();
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes,
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
    public function allRecipes(Request $request, RecipeRepository $recipeRepository): Response {
        $user = $this->security->getUser();
        $recipes = $recipeRepository->findAll();
        return $this->render('main/discover.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'recipes' => $recipes
        ]);

    }
}
