<?php

// charge l'autoload de composer
require "vendor/autoload.php";

// charge le contenu du .env dans $_ENV
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// Création instance de la classe Router
$router = new Router();

// Exemple de tableau $_GET cela permet d'afficher les controllers (Méthode plane() de PlaneController)
$_GET = ['route' => 'plane'];

// Appel de la méthode handleRequest avec £_GET en paramètres
$router->handleRequest($_GET);