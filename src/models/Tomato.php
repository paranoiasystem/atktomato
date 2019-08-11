<?php


namespace Models;


use atk4\data\Model;

class Tomato extends Model
{
    public $table = 'tomato';

    public function init()
    {
        parent::init();

        $this->addField('name', [
            'type' => 'string',
            'caption' => 'Name of tomato'
        ]);
        $this->addField('numberOfTomato', [
            'type' => 'integer',
            'caption' => 'Number of tomato'
        ]);
        $this->addField('numberOfDoneTomato', [
            'type' => 'integer',
            'caption' => 'Number of done tomato'
        ]);
        $this->addExpression('remaningTomato', '[numberOfTomato] - [numberOfDoneTomato]');
        $this->addField('expiryTomato', [
            'type' => 'date',
            'caption' => 'Tomato Expiry'
        ]);
        $this->addField('isDone', [
            'type' => 'boolean',
            'caption' => 'Done?'
        ]);
    }
}