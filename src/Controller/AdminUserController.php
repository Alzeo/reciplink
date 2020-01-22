<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends AbstractController
{
    /**
     * @Route("/admin/users", name="admin_users_index")
     */
    public function index(UserRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $users = $paginator->paginate($repository->findAll(),
            $request->query->getInt('page', 1),
            12/*page number*/
        );

        $user = $this->getUser();
        return $this->render('admin/user/index.html.twig', [
            'user' => $user,
            'users' => $users
        ]);
    }

    /**
     * @param EntityManagerInterface $manager
     * @Route("/admin/users/{id}/delete", name="admin_users_delete")
     */
    public function delete(User $user, EntityManagerInterface $manager){

        $manager->remove($user);
        $manager->flush();

        $this->addFlash('success', "L'utilisateur a bien été supprimée !");
        return $this->redirectToRoute('admin_users_index');
    }

}
