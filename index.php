<?php

/*
Le fichier .htaccess permet de rediriger toutes les requêtes HTTP vers le fichier index.php ce qui nous de permet de n'avoir qu'un seul point d'entrée
index.php est le FrontController
*/
require __DIR__ . '/Model/Pokemon.php';
require __DIR__ . '/Model/Type.php';

require __DIR__ . '/inc/DBData.php';

require __DIR__ . '/Controllers/MainController.php';
require __DIR__ . '/Controllers/PokemonController.php';
require __DIR__ . '/Controllers/TypeController.php';

$pokemonController = new PokemonController();
$typeController = new TypeController();

if (isset($_GET['_url'])) {
  $url = $_GET['_url'];
} else {
  $url = '/';
}

/*
Router : il appelle la bonne méthode de controller en fonction de l'URL qui est appelée.
Le Router compare l'URL virtuelle appelée avec des routes. Les routes sont les URLs prévues par notre application, les URLs que notre application saura gérer.
*/
if ($url === '/') {
  $pokemonController->selectAllAction();
} else if ($url === '/pokemon') {
  $pokemonController->selectOneAction();
} else if ($url === '/types') {
  $typeController->selectAllAction();
} else if ($url === '/type_pokemons') {
  $typeController->selectOneAction();
} else {
  /*
    Si aucune des route ne correspond à l'URL définie dans la requête HTTP, nous envoyons une erreur 404 (Not Found)
    https://www.php.net/manual/fr/function.http-response-code.php
    */
  http_response_code(404);
}
