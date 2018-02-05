<?php

namespace App\controllers; 

class HomeController extends BaseController {
    static function index()  {
        self::app()->render('template.php');
    }
}
