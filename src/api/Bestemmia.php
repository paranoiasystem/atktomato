<?php


namespace Api;


class Bestemmia
{
    static function bestemmia(){
        $bestemmie = [
            'Dio cane',
            'Madonna puttana',
            'Mannagg o bambniell',
            'Porco dio',
            'Gesucristo impalato'
        ];
        $bestemmia['message'] = $bestemmie[rand(0, (count($bestemmie)-1))];
        return $bestemmia;
    }

}