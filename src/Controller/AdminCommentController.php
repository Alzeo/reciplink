<?php

namespace App\Controller;

use App\Entity\RecipeComment;
use App\Form\RecipeCommentEditType;
use App\Form\RecipeCommentType;
use App\Repository\RecipeCommentRepository;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class AdminCommentController extends AbstractController
{
    /**
     * @Route("/admin/comments", name="admin_comments_index")
     */
    public function index(RecipeCommentRepository $repository)
    {
        $user = $this->getUser();
        return $this->render('admin/comment/index.html.twig', [
            'comments' => $repository->findAll(),
            'user' => $user
        ]);
    }

    /**

     * @Route("admin/comments/{id}/edit", name="admin_comments_edit")
     */
    public function edit(RecipeComment $recipeComment, Request $request) {

        $user = $this->getUser();
        $form = $this->createForm(RecipeCommentEditType::class, $recipeComment);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($recipeComment);
            $manager->flush();

            $this->addFlash('success', "Le commentaire a bien été modifié !");
        }
        return $this->render('admin/comment/edit.html.twig', [
            'comment' => $recipeComment,
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

    /**
     * @Route("/admin/comments/{id}/publish", name="admin_comments_publish")
     * @param $id
     */
    public function publish($id, RecipeCommentRepository $repository, EntityManagerInterface $manager, MailerInterface  $mailer){
        $recipeComment = $repository->findOneById($id);
        $recipeComment->setPublish(true);
        $manager->persist($recipeComment);
        $manager->flush();
        $email = (new Email())
            ->from('contact@figuy.fr')
            ->to('jardisindustrie@gmail.com')
            ->subject('Votre commentaire a été approuvé')
            ->html("<h3>Félicitation votre commentaire pour la recette " . $recipeComment->getRecipe()->getName() . " à été approuvé </h3>");
        $mailer->send($email);
        $this->addFlash('success', "Votre commentaire a bien été publier");
        return $this->redirectToRoute('admin_posts_index');
    }

    /**
     * @param EntityManagerInterface $manager
     * @Route("/admin/comments/{id}/delete", name="admin_comments_delete")
     */
    public function  delete(RecipeComment $recipeComment, EntityManagerInterface $manager){

        $manager->remove($recipeComment);
        $manager->flush();

        $this->addFlash('success', 'Le commentaire a bien été supprimée !');
        return $this->redirectToRoute('admin_comments_index');
    }
}
