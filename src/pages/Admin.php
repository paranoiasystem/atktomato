<?php

namespace Pages;

use Components\AdminCounter;
use Lib\ATK;
use Models\Car;
use Models\Tomato;

class Admin
{

    private static function generateMenu($atk) {
        $atk->layout->leftMenu->add('Item', ['Dashboard', 'icon' => 'dashboard'])->link('/admin');
        $atk->layout->leftMenu->add('Item', ['Tomato', 'icon' => 'clipboard list'])->link('/admin/tomato');
    }

    static function getHomePage() {
        ob_start();
        $atk = ATK::getAtk('Admin', 'Admin');
        self::generateMenu($atk);
        $atk->add('Header')->set('Dashboard admin');
        $model = new \Models\Tomato($atk->db);
        $atk->add(new AdminCounter([
            'icon' => 'clipboard',
            'value' => $model->action('count')->where('isDone', false)->getOne(),
            'text' => 'Remaning Tomato'
        ]));
        $atk->add(new AdminCounter([
            'icon' => 'clipboard check',
            'value' => $model->action('count')->where('isDone', true)->getOne(),
            'text' => 'Finished Tomato'
        ]));
        $atk->add(new AdminCounter([
            'icon' => 'calendar times',
            'value' => $model->action('count')->where('expiryTomato', '<', date('Y-m-d'))->getOne(),
            'text' => 'Expired Tomato'
        ]));
        $atk->run();
        return ob_get_clean();
    }

    static function getTomatoPage() {
        ob_start();
        $atk = ATK::getAtk('Admin', 'Admin');
        self::generateMenu($atk);
        $atk->add('Header')->set('Manage Tomato');
        $model = new \Models\Tomato($atk->db);
        \atk4\schema\Migration::getMigration($model)->migrate();
        $atk->add('CRUD')->setModel(new Tomato($atk->db));
        $atk->run();
        return ob_get_clean();
    }

}