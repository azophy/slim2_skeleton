<?php
namespace App\controllers; 

require 'vendor/autoload.php';

class BaseController {
    static function app()  {
        global $app;
        return $app;
    }

    static function twig() {
        global $twig;
        return $twig;
    }
}
