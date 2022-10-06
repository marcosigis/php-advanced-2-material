<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>List of Recipes</title>
    </head>
    <body>
    <?php include '..\src\include\header.html' ?>


        <h1>List of Recipes</h1>
        <ul>
            <?php foreach ($recipes as $recipe) : ?>
            <li>
                <a href="show?id=<?= $recipe['id'] ?>">
                    <?= $recipe['title'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>