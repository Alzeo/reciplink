<?php

namespace App\Controller;

use App\Entity\resetPassword;
use App\Form\ResetPasswordType;
use App\Notifications\PasswordNotifications;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/reset/password", name="reset_password")
     * @param UserRepository $userRepository
     * @param Request $request
     * @param PasswordNotifications $notifications
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function reset(UserRepository $userRepository, Request $request, PasswordNotifications $notifications, MailerInterface $mailer, Environment $environment)
    {
        $resetPassword = new resetPassword();
        $form = $this->createForm(ResetPasswordType::class, $resetPassword);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $userSearch = $userRepository->findOneByEmail($resetPassword->getEmail());
            if($userSearch != null){
                dump($userSearch->getUsername());
                $email = (new Email())
                    ->from('contact@figuy.fr')
                    ->to($resetPassword->getEmail())
                    ->subject('Réinitialiser votre mot de passe !')
                    ->html('<h3>Alors '. $userSearch->getUsername() . '! </h3><p>Voici votre mot de passe temporer</p>');
                    $mailer->send($email);
                    $this->addFlash('success', "Un mail vient d'etre envoye !");
            }
        }
        return $this->render('reset_password/index.html.twig', [
            'controller_name' => 'ResetPasswordController',
            'form' => $form->createView()
        ]);
    }
}
