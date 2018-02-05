<?php

namespace App\controllers; 

class BaseController {
    static function app()  {
        global $app;
        return $app;
    }
}
