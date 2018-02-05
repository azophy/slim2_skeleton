<?php
require 'vendor/autoload.php';

$config = require('app/config/app.php');
$app = new \Slim\Slim($config);
$app->get('/', 'App\controllers\HomeController::index');
$app->run();
