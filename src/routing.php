<?php

require __DIR__.'/controllers/recipe-controller.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    browseRecipes();
} elseif ('/show' === $urlPath) {
    check();
} elseif ('/add' === $urlPath) {
    addRecipe();
} elseif ('/delete' === $urlPath) {
    routeDeleteRecipe();
}else {
    header('HTTP/1.1 404 Not Found');
}

// elseif ('/delete' === $urlPath) {
//     deleteRecipe();
// }