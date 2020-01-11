<?php

namespace App\Controller;

use App\Entity\Tags;
use App\Form\TagsType;
use App\Repository\TagsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminTagsController extends AbstractController
{
    /**
     * @Route("/admin/tags", name="admin_tags_index")
     */
    public function index(TagsRepository $repository)
    {
        $user = $this->getUser();
        return $this->render('admin/tags/index.html.twig', [
            'tags' => $repository->findAll(),
            'user' => $user
        ]);
    }

    /**
     * @param Request $request
     * @Route("/admin/tags/new", name="admin_tags_new")
     */
    public function create(Request $request){
        $user = $this->getUser();
        $tags = new Tags();
        $form = $this->createForm(TagsType::class, $tags);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tags);
            $entityManager->flush();
            $this->addFlash('success', 'Le tag a bien été créé !');
            return $this->redirectToRoute('admin_tags_index');
        }
        return $this->render('admin/tags/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
        }

    /**
     * @param Tags $tags
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin/tags/{id}/edit", name="admin_tags_edit")
     */
    public function edit(Tags $tags, Request $request)
    {

        $user = $this->getUser();
        $form = $this->createForm(TagsType::class, $tags);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($tags);
            $manager->flush();
            $this->addFlash('success', "Le tags a bien été modifié !");
            return $this->redirectToRoute('admin_tags_index');

        }
        return $this->render('admin/tags/edit.html.twig', [
            'tag' => $tags,
            'form' => $form->createView(),
            'user' => $this->getUser()
        ]);
    }

        /**
         * @param EntityManagerInterface $manager
         * @Route("/admin/tags/{id}/delete", name="admin_tags_delete")
         */
        public function  delete(Tags $tags, EntityManagerInterface $manager){

            $manager->remove($tags);
            $manager->flush();

            $this->addFlash('success', 'Le tag a bien été supprimée !');
            return $this->redirectToRoute('admin_tags_index');
        }
}
