<?php

namespace App\Controller;

use App\Entity\resetPassword;
use App\Form\ResetPasswordType;
use App\Notifications\PasswordNotifications;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
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
    public function reset(EntityManagerInterface $manager, UserRepository $userRepository, Request $request, UserPasswordEncoderInterface $encoder, PasswordNotifications $notifications, MailerInterface $mailer, Environment $environment)
    {
        $resetPassword = new resetPassword();
        $form = $this->createForm(ResetPasswordType::class, $resetPassword);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $userSearch = $userRepository->findOneByEmail($resetPassword->getEmail());
            $newPassword = 'recipe'.uniqid();
            $userSearch->setPassword($encoder->encodePassword($userSearch, $newPassword));
            $manager->flush();
            if($userSearch != null){
                dump($userSearch->getUsername());
                $email = (new TemplatedEmail())
                    ->from('contact@figuy.fr')
                    ->to($resetPassword->getEmail())
                    ->subject('Réinitialiser votre mot de passe !')
                    ->htmlTemplate('emails/resetPassword.html.twig')
                    ->context([
                        'username' => $userSearch->getUsername(),
                        'password' => $newPassword
                    ]);
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
