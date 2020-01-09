<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Entity\RecipeSave;
use App\Entity\User;
use App\Form\editUserType;
use App\Form\UserType;
use App\Repository\RecipeCommentRepository;
use App\Repository\RecipeRepository;
use App\Repository\RecipeSaveRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security as Secur;

/**
 * @Route("/compte")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/", name="user_show")
     * @IsGranted("ROLE_USER")
     * @param User $user
     * @param RecipeRepository $recipeRepository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param RecipeSaveRepository $saveRepo
     * @return Response
     */
    public function show(UserRepository $userRepository, RecipeRepository $recipeRepository, PaginatorInterface $paginator, Request $request, RecipeSaveRepository $saveRepo): Response
    {
        $user = $this->getUser();
        $recipes = $paginator->paginate($recipeRepository->findBy(['user' => $user]),
            $request->query->getInt('page', 1),
            6/*page number*/
        );


        $recipeSave = $paginator->paginate($saveRepo->findBy(['user' => $user]),
        $request->query->getInt('page', 1), 6);


        return $this->render('user/show.html.twig', [
            'user' => $user,
            'recipes' => $recipes,
            'saveRecipes' => $recipeSave,
            'current_path' => 'informations'
        ]);
    }


    /**
     * @Route("/{username}/recettes-enregistree", name="user_save_recipe", methods={"GET"})
     * @param User $user
     * @param RecipeRepository $recipeRepository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param RecipeSaveRepository $saveRepo
     * @return Response
     */
    public function saveRecipe(User $user, UserRepository $userRepository, RecipeRepository $recipeRepository, PaginatorInterface $paginator, Request $request, RecipeSaveRepository $saveRepo): Response
    {

        $recipeSave = $paginator->paginate($saveRepo->findBy(['user' => $user]),
            $request->query->getInt('page', 1), 6);


        return $this->render('user/show.html.twig', [
            'user' => $user,
            'saveRecipes' => $recipeSave,
            'current_path' => 'saveRecipe'
        ]);
    }

    /**
     * @Route("/{username}/mes-recettes", name="user_my_recipes", methods={"GET"})
     * @param User $user
     * @param RecipeRepository $recipeRepository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param RecipeSaveRepository $saveRepo
     * @return Response
     */
    public function userRecipes(User $user, UserRepository $userRepository, RecipeRepository $recipeRepository, PaginatorInterface $paginator, Request $request, RecipeSaveRepository $saveRepo): Response
    {

        $userRecipes = $paginator->paginate($recipeRepository->findBy(['user' => $user]),
            $request->query->getInt('page', 1),
            6/*page number*/
        );


        return $this->render('user/show.html.twig', [
            'user' => $user,
            'userRecipes' => $userRecipes,
            'current_path' => 'userRecipe'
        ]);
    }

    /**
     * @Route("/edit", name="user_edit")
     * @IsGranted("ROLE_USER")
     */
    public function edit(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(editUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_show', [
                'user' => $user,
                'form' => $form->createView(),
                'id' => $user->getId()
            ]);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }


}
