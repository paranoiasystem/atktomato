<?php

namespace Lib;

use atk4\data\Persistence;
use atk4\ui\App;

class ATK
{

    /**
     * ATK constructor.
     */
    public static function getAtk($title, $layout)
    {
        $atk = new App(['url_building_ext' => '']);
        $atk->cdn['atk'] = '/assets';
        $atk->cdn['jquery'] =  '/assets';
        $atk->cdn['serialize-object'] = '/assets';
        $atk->cdn['semantic-ui'] = '/assets';
        $atk->title = $title;
        $atk->initLayout($layout);
        $atk->db = self::getDB();
        return $atk;
    }

    public static function getDB(){
        return Persistence::connect('sqlite://db/db.db');
    }
}