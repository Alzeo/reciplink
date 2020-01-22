<?php

namespace App\Controller;

use App\Entity\Programmes;
use App\Form\ProgrammeType;
use App\Repository\ProgrammesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminProgrammeController extends AbstractController
{
    /**
     * @Route("/admin/programmes", name="admin_programmes_index")
     */
    public function index(ProgrammesRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $programmes = $paginator->paginate($repository->findAll(),
            $request->query->getInt('page', 1),
            12/*page number*/
        );
        return $this->render('admin/programme/index.html.twig', [
            'programmes' => $programmes,
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @throws \Exception
     * @Route("/admin/programmes/new", name="admin_programmes_new")
     */
    public function new(Request $request, EntityManagerInterface $manager){

        $programme = new Programmes();
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $programme->setCreatedAt(new \DateTime('now'));

            /** @var UploadedFile $picture */
            $picture = $form['picture']->getData();

            if ($picture) {
                $originalFilename = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = 'programme'.'-'.uniqid().'.'.$picture->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $picture->move(
                        $this->getParameter('posts_image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $programme->setPicture($newFilename);
            }

            $manager->persist($programme);
            $manager->flush();
            $this->addFlash('success', 'Le programme a bien été a bien été créé');
            return $this->redirectToRoute('admin_programmes_index');
        }

        return $this->render('admin/programme/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
