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

    /**
     * @Route("/recipes/find/{id}", name="find_a_recipe")
     */

    public function findRecipes($id) {
        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->find($id);

        if (!$recipes) {
        throw $this->createNotFoundException(
            'No recipe was found with the id: ' . $id
        );
        } else {
            return $this->json([
                'id' => $recipes->getId(),
                'name' => $recipes->getName(),
                'ingredients' => $recipes->getIngredients(),
                'difficulty' => $recipes->getDifficulty(),
            ]);
        }
    }

    /**
     * @Route("/recipes/edit/{id}{name}", name="edit_a_recipe")
     */

    public function editRecipes($id, $name) {
        $entityManager = $this->getDoctrine()->getManager();
        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->find($id);

        if (!$recipes) {
            throw $this->createNotFoundException(
                'No recipe was found with the id: ' . $id
            );
        } else {
            $recipes->setName($name);
            $entityManager->flush();

            return $this->json([
                'message' => 'Edited a recipe with id . $id'
            ]);
        }
    }
}

