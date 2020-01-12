<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminPostController extends AbstractController
{
    /**
     * @Route("/admin/posts", name="admin_posts_index")
     */
    public function index(PostRepository $repository)
    {
        return $this->render('admin/Post/index.html.twig', [
            'posts' => $repository->findAll(),
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     * @Route("/admin/posts/new", name="admin_posts_new")
     */
    public function new(Request $request, EntityManagerInterface $manager){

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $post->setCreatedAt(new \DateTime('now'));

            /** @var UploadedFile $image */
            $image = $form['Image']->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = 'post'.'-'.uniqid().'.'.$image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('posts_image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $post->setImage($newFilename);
            }

            $manager->persist($post);
            $manager->flush();
            $this->addFlash('success', 'Le post a bien été créé');
            return $this->redirectToRoute('admin_posts_index');
        }

        return $this->render('admin/Post/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
