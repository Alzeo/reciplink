<?php

namespace App\Controller;

use App\Entity\PasswordUpdate;
use App\Entity\Recipe;
use App\Entity\RecipeSave;
use App\Entity\User;
use App\Form\editUserType;
use App\Form\PasswordUpdateType;
use App\Form\UserType;
use App\Repository\RecipeCommentRepository;
use App\Repository\RecipeRepository;
use App\Repository\RecipeSaveRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security as Secur;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
     * @Route("/recettes-enregistrees", name="user_save_recipe")
     * @param User $user
     * @param RecipeRepository $recipeRepository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param RecipeSaveRepository $saveRepo
     * @return Response
     */
    public function saveRecipe(UserRepository $userRepository, RecipeRepository $recipeRepository, PaginatorInterface $paginator, Request $request, RecipeSaveRepository $saveRepo): Response
    {

        $user = $this->getUser();
        $recipeSave = $paginator->paginate($saveRepo->findBy(['user' => $user]),
            $request->query->getInt('page', 1), 6);


        return $this->render('user/show.html.twig', [
            'user' => $user,
            'saveRecipes' => $recipeSave,
            'current_path' => 'saveRecipe'
        ]);
    }


    /**
     * @Route("/update-password", name="update_password")
     */
    public function updatePassword(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){

        $user = $this->getUser();
        $passwordUpdate = new PasswordUpdate();
        $form = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if(!password_verify($passwordUpdate->getOldPassword(), $user->getPassword())){
                // gérer l'erreur ici
            } else {
                $newPassword = $passwordUpdate->getNewPassword();
                $password = $encoder->encodePassword($user, $newPassword);
                $user->setPassword($password);
                $manager->persist($user);
                $manager->flush();
                $this->addFlash('success', 'Votre mot de passe a bien été modifié !');
                return $this->redirectToRoute('home');
            }
        }

        return $this->render('user/password.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/mes-recettes", name="user_my_recipes")
     * @param User $user
     * @param RecipeRepository $recipeRepository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param RecipeSaveRepository $saveRepo
     * @return Response
     */
    public function userRecipes( UserRepository $userRepository, RecipeRepository $recipeRepository, PaginatorInterface $paginator, Request $request, RecipeSaveRepository $saveRepo): Response
    {
        $user = $this->getUser();
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
    public function edit(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $manager): Response
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

        $passwordUpdate = new PasswordUpdate();
        $formPassword = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
        $formPassword->handleRequest($request);

        if($formPassword->isSubmitted() && $formPassword->isValid()){
            if(!password_verify($passwordUpdate->getOldPassword(), $user->getPassword())){
                // gérer l'erreur ici
            } else {
                $newPassword = $passwordUpdate->getNewPassword();
                $password = $encoder->encodePassword($user, $newPassword);
                $user->setPassword($password);
                $manager->persist($user);
                $manager->flush();
                $this->addFlash('success', 'Votre mot de passe a bien été modifié !');
                return $this->redirectToRoute('home');
            }
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'formPassword' => $formPassword->createView(),
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
