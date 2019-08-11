<?php

namespace Pages;


use Components\Custom;
use Lib\ATK;

class Frontend
{

    static function getHomePage(){
        ob_start();
        $atk = ATK::getAtk('ATK Tomato', 'Centered');
        $atk->add('Header')->set('Coming Soon');
        $atk->run();
        return ob_get_clean();
    }

}