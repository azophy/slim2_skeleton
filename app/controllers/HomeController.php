<?php

namespace App\controllers; 

class HomeController extends BaseController {
    static function index()  {
        echo self::twig()->render('index.html');
    }
}
