<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminRecipeController extends AbstractController
{
    /**
     * @Route("/admin/recipes", name="admin_recipes_index")
     */
    public function index(RecipeRepository $repository)
    {
        $user = $this->getUser();
        return $this->render('admin/recipe/index.html.twig', [
            'recipes' => $repository->findAll(),
            'user' => $user
        ]);
    }
}
