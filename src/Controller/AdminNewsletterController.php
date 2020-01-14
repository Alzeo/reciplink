<?php

namespace App\Controller;

use App\Repository\NewsletterRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class AdminNewsletterController extends AbstractController
{
    /**
     * @Route("/admin/newsletter", name="newsletter")
     */
    public function index()
    {

        return $this->render('admin/newsletter/index.html.twig', [
            'controller_name' => 'AdminNewsletterController',
        ]);
    }


    /**
     * @Route("/admin/send/paleo", name="newsletter_paleo")
     */
    public function newsPaleo(MailerInterface $mailer, NewsletterRepository $newsletterRepository){

        $newsletterPaleo = $newsletterRepository->findByCategorie('Recettes paléo');
        dump($newsletterPaleo);
        $email = (new Email())
            ->from('contact@figuy.fr')
            ->to($emails)
            ->subject('Nouvel inscription sur le site !')
            ->html("<h3>Les dernières recettes ajoutés</h3>");
        $mailer->send($email);
        $this->addFlash('success', "la newsletter est partie");
        return $this->redirectToRoute('newsletter');
    }
}
