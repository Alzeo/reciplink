<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        dump($user->getUsername());

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $register = new User();
        $register->setRoles(['ROLE_USER']);
        $form = $this->createForm(RegisterType::class, $register);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($register, $register->getPassword());
            $register->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($register);
            $entityManager->flush();
            return $this->redirectToRoute('app_login', [ 'user' => 'null'
            ]);
        }
        return $this->render('main/register.html.twig', [
            'current_menu' => 'panel',
            'form' => $form->createView()
        ]);
    }
}
