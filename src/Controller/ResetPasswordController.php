<?php

namespace App\Controller;

use App\Entity\resetPassword;
use App\Form\ResetPasswordType;
use App\Notifications\PasswordNotifications;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/reset/password", name="reset_password")
     * @param UserRepository $userRepository
     * @param Request $request
     * @param PasswordNotifications $notifications
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function reset(UserRepository $userRepository, Request $request, PasswordNotifications $notifications)
    {
        $resetPassword = new resetPassword();
        $form = $this->createForm(ResetPasswordType::class, $resetPassword);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $userSearch = $userRepository->findByEmail($resetPassword->getEmail());
            if($userSearch != null){
                $notifications->notify($resetPassword);
                $this->addFlash('success', 'Vous allez recevoir un mail avec un nouveau mot de passe');
            }
        }
        return $this->render('reset_password/index.html.twig', [
            'controller_name' => 'ResetPasswordController',
            'form' => $form->createView()
        ]);
    }
}
