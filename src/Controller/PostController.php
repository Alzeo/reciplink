<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use App\Repository\RecipeRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class PostController
 * @package App\Controller
 */
class PostController extends AbstractController
{

    /**
     * @param $slug
     * @Route("/post/{slug}", name="post_show")
     */
    public function show($slug, Post $post, PostRepository $postRepository, RecipeRepository $recipeRepository): Response
    {
        $posts = $postRepository->findLatest();
        return $this->render('posts/show.html.twig', [
           'post' => $postRepository->findOneBySlug($slug),
            'posts' => $posts,
            'recipes' => $recipeRepository->findLatestAside()
        ]);
    }
}