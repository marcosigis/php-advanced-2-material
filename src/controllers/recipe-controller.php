<?php

require __DIR__ . '/../models/recipe-model.php';

function browseRecipes(): void
{
    $recipes = getAllRecipes();

    require __DIR__ . '/../views/index.php';
}

function check() : void{
// Input GET parameter validation (integer >0)
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]);
if (false === $id || null === $id) {
    header("Location: /");
    exit("Wrong input parameter");
} else {
    showRecipe($id);
}

}


function showRecipe($id): void
{

// Fetching a recipe from database -  assuming the database is okay
$recipe = getRecipeById($id);

// Database result check
if (!isset($recipe['title']) || !isset($recipe['description'])) {
    header("Location: /");
    exit("Recipe not found");
}

    require __DIR__ . '/../views/show.php';

}

function addRecipe(): void
{
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        $title = clean_input($_POST["title"]); 
        $description = clean_input($_POST["description"]);
        $errors = [];
    
        if (empty($title) || ($title === '' )) {
            $errors[] = "Title is required";
            } elseif(strlen($title) > 1000){
              $errors[] = "The title must be max 100 characters";
            } elseif(strlen($title) < 2){
              $errors[] = "The title must be longer than 1 character.";
            } 
            $recipe[] = $title;
    
            if (empty($description) || ($description === '' )) {
                $errors[] = "Description is required";
                } elseif(strlen($description) > 1000){
                  $errors[] = "The description must be max 1000 characters";
                } elseif(strlen($description) < 2){
                  $errors[] = "The description must be longer than 1 character";
                } 
                $recipe[] = $description;
    
 
    if (empty($errors)) {
       $id=saveRecipe($recipe);
       if ($id !== false){
       header('Location: /show?id=' . $id);
       return;
       }else {
        $errors[] = "Qualcosa è andato male ";
        
       }
      }
    }
    require __DIR__ . '/../views/form.php';
    
}

function routeDeleteRecipe() {
  $id = $_GET['id'];
  deleteRecipe($id);
}

function clean_input($data) {
    $data = trim($data);
    $data = htmlentities($data);
    return $data;
  }
