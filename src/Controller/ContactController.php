<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(MailerInterface $mailer, Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $email = (new Email())
                ->from('jardisindustrie@gmail.com')
                ->to('jardisindustrie@gmail.com')
                ->replyTo($contact->getEmail())
                ->subject('Figuy Support')
                ->html("<h3>Nouveau message support de" . $contact->getPrenom() . "</h3>
                        <p>" . $contact->getMessage() .  "</p>
                        ");
            $mailer->send($email);
            $this->addFlash('success', "Votre mail a bien été envoyé, nous vous répondrons le plus vite possible.");
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }
}
