<?php

namespace App\Controller;

use App\Repository\ProgrammesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammeController extends AbstractController
{
    /**
     * @Route("/programme", name="programme_index")
     */
    public function index(ProgrammesRepository $programmesRepository)
    {

        return $this->render('programme/index.html.twig', [
            'programmes' => $programmesRepository->findAll(),
        ]);
    }
}
