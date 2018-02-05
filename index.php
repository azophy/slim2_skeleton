<?php
require 'vendor/autoload.php';

// enable twig template
$loader = new Twig_Loader_Filesystem('app/views');
$twig = new Twig_Environment($loader, [
    'cache' => 'app/cache',
]);

// config file definition
$config = require('app/config/app.php');

// main app calls
$app = new \Slim\Slim($config);
$app->get('/', 'App\controllers\HomeController::index');
$app->run();
