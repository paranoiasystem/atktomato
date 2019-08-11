<?php


namespace Components;


use atk4\ui\View;

class AdminCounter extends View
{
    public $defaultTemplate = __DIR__ . '/admincounter.html';

    protected $icon = '';
    protected $value = 0;
    protected $text = '';

    function renderView()
    {
        $this->template->set('icon', $this->icon);
        $this->template->set('value', $this->value);
        $this->template->set('text', $this->text);
        return parent::renderView();
    }

}