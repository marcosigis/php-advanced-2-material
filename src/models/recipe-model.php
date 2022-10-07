<?php 
function createConnection(): PDO
{
    return new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
}

function getAllRecipes(): array
{
    $connection = createConnection();
    $statement = $connection->query('SELECT id, title FROM recipe');
    $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $recipes;
}

function getRecipeById(int $id): array | false
{
    $connection = createConnection();
    $query = 'SELECT title, description FROM recipe WHERE id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $recipe = $statement->fetch(PDO::FETCH_ASSOC);

    return $recipe;
}

function saveRecipe(array $recipe): int | false
{
    $connection = createConnection();

    // lance une requête SQL pour engistrer la recette

    $query = 'INSERT INTO recipe (title, description) VALUES (:title, :description)';
    $statement = $connection->prepare($query);
    $statement->bindValue(':title', $recipe[0], \PDO::PARAM_STR);
    $statement->bindValue(':description', $recipe[1], \PDO::PARAM_STR);
    
    try{$statement->execute();} 
    catch(\Exception $e){
        return false;
    }
    
    

    $result=$connection->lastInsertId();
    return $result;

}
    
    
function deleteRecipe(int $id): bool
{

    $connection = createConnection();
    $query = 'DELETE FROM recipe WHERE id = :id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, \PDO::PARAM_INT);
    $result = $statement->execute();
    return $result;
}
