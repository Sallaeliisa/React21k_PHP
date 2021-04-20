<?php

/**
     * GET /recipes
     * return all recipes
     * 
     * GET /recipes/{id}
     * return recipes with the specific id if found
     * 
     * POST /recipes
     * parameters must exist
     * if we have id, name, ingredients, difficulty
     * add a new recipe to our recipes array and save the json
     * 
     * PUT /recipes
     * parameters must exist
     * if we have id, name, ingredients, difficulty
     * find if there is a recipe with such id, if found, update
     * 
     * DELETE /recipes/{id}
     * delete recipe with the matching id if found
     * 
     */

$data = file_get_contents('data.json');
$request_method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$parts = parse_url($uri);

parse_str($parts['query'], $params);
print_r($params);

$exploded_parts = explode('/', $parts['path']);
print_r($exploded_parts);

switch($request_method) {
    case 'GET':
        get_recipes();
        break;
    // case 'POST':
    //     add_new_recipe();
    //     break;
    // case 'PUT':
    //     update_recipe();
    //     break;
    // case 'DELETE':
    //     remove_recipe();
    //     break;
        default: echo json_encode(array('message' => 'An error has occurred'));
        break;
}

function get_recipes(){
    if (!isset($GLOBALS['exploded_parts'][3])) {
        echo $GLOBALS['data'];
    } else {
        echo json_encode(array('recipe' => 'here is your recipe'));
    }
}



?>
