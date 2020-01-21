<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Form\RecipeEditType;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class AdminRecipeController extends AbstractController
{
    /**
     * @Route("/admin/recipes", name="admin_recipes_index")
     */
    public function index(RecipeRepository $repository)
    {
        $user = $this->getUser();
        return $this->render('admin/recipe/index.html.twig', [
            'recipes' => $repository->findAll(),
            'user' => $user
        ]);
    }

    /**
     * @param Recipe $recipe
     * @return Response
     * @Route("/admin/recipes/{id}/edit", name="admin_recipes_edit")
     */
    public function edit(Recipe $recipe, Request $request) {

        $user = $this->getUser();
        $form = $this->createForm(RecipeEditType::class, $recipe);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($recipe);
            $manager->flush();

            $this->addFlash('success', "Le recette a bien été modifié !");
        }
        return $this->render('admin/recipe/edit.html.twig', [
            'recipe' => $recipe,
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }


    /**
     * @Route("/admin/recipes/{id}/publish", name="admin_recipes_publish")
     * @param $id
     */
    public function publish($id, RecipeRepository $repository, EntityManagerInterface $manager, MailerInterface $mailer){
        $recipe = $repository->findOneById($id);
        $recipe->setPublish(true);
        $manager->persist($recipe);
        $manager->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('aloha@figuy.fr', 'Figuy'))
            ->to($recipe->getUser()->getEmail())
            ->subject('Recette approuvée !')
            ->htmlTemplate('emails/recipePublish.html.twig')
            ->context([
                'user' => $recipe->getUser()->getUsername(),
                'recipe' => $recipe->getName(),
                'link' => 'https://figuy.fr/recette/'. $recipe->getSlug()
            ]);
        $mailer->send($email);
        $this->addFlash('success', "La recette a bien été publier");
        return $this->redirectToRoute('admin_recipes_index');
    }

    /**
     * @param Recipe $recipe
     * @param EntityManagerInterface $manager
     * @Route("/admin/recipes/{id}/delete", name="admin_recipes_delete")
     */
    public function  delete(Recipe $recipe, EntityManagerInterface $manager){

            $manager->remove($recipe);
            $manager->flush();

            $this->addFlash('success', 'La recette a bien été supprimée !');
        return $this->redirectToRoute('admin_recipes_index');
    }
}
