<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(EntityManagerInterface $manager, RecipeRepository $repository)
    {

        $users = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\User u')->getSingleScalarResult();
        $recipes = $manager->createQuery('SELECT COUNT(a) FROM App\Entity\Recipe a')->getSingleScalarResult();
        $comments = $manager->createQuery('SELECT COUNT(c) FROM App\Entity\RecipeComment c')->getSingleScalarResult();
        return $this->render('admin/dashboard/index.html.twig', [
            'stats' => [
                'users' => $users,
                'recipes' => $recipes,
                'comments' => $comments
            ],
            'controller_name' => 'AdminDashboardController',
        ]);
    }
}
