<?php

// Importer la classe Router du namespace Router
use Router\Router;

// Charger les dépendances de l'application
require __DIR__ . '/../vendor/autoload.php';

// Définir les constantes pour les vues et les scripts
define('VIEWS', dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR );

// Instancier un nouvel objet Router en passant l'URL actuelle à la classe
$router = new Router($_GET['url']);

// Définir les routes de l'application en utilisant la méthode get() du routeur
$router->get('/', 'App\Controllers\BlogController@welcome');
$router->get('/posts/', 'App\Controllers\BlogController@index');
$router->get('/post/:id', 'App\Controllers\BlogController@show');

// Exécuter le routeur pour correspondre à la route demandée
$router->run();

?>