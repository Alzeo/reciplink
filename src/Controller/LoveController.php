<?php

namespace App\Controller;

use App\Entity\Love;
use App\Entity\Recipe;
use App\Entity\User;
use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter ;

class LoveController extends AbstractController
{

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * @Route("/love/{idLove}/recipe/{idRecipe}", name="love")
     * @Entity("recipe", expr="repository.find(idRecipe)")
     * @Entity("love", expr="repository.find(idLove)")
     * @param Recipe $recipe
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function love(Recipe $recipe, Love $love)
    {
        $user = $this->security->getUser();
        $addLove = $love->addUser($user);
        $addLove->addRecipe($recipe);
        $addLove->setLoves($addLove->getLoves() + 1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        return $this->redirectToRoute('recipe_show', [
            'id' => $recipe->getId()]);

    }
}
