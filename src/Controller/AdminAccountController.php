<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminAccountController extends AbstractController
{
    /**
     * @Route("/admin/login", name="admin_account_login")
     */
    public function login()
    {
         if ($this->getUser()) {
           return $this->redirectToRoute('admin_recipes_index', ['user' =>  $this->getUser()]);
        }

         $user = $this->getUser();
        return $this->render('admin/account/login.html.twig', [
            'user' => $user,
        ]);
    }
}
