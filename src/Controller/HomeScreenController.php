<?php

namespace App\Controller;

use App\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeScreenController extends AbstractController
{


    /**
     * @Route("/recipes/add", name="add_new_recipe")
     * @param Request $request
     * @return Response
     */
    public function addRecipe(Request $request): Response
    {

        $entityManager = $this->getDoctrine()->getManager();

        $newRecipe = new Recipe();
        $newRecipe->setName($request->query->get('name'));
        $newRecipe->setIngredients($request->query->get('ingredients'));
        $newRecipe->setDifficulty($request->query->get('difficulty'));

        $entityManager->persist($newRecipe);

        $entityManager->flush();

        return new Response('trying to add new recipe...' . $newRecipe->getId());
    }

    /**
     * @Route("/recipes/all", name="get_all_recipes")
     */

    public function getAllRecipes(){
        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findAll();

        $response = [];

        foreach($recipes as $recipes) {
            $response[] = array(
                'id' => $recipes->getId(),
                'name' => $recipes->getName(),
                'ingredients' => $recipes->getIngredients(),
                'difficulty' => $recipes->getDifficulty()
            );
        }

        return $this->json($response);
    }
}

