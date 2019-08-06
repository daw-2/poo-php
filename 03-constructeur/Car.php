<?php

class Car
{
    public $wheel = 4;
    private $color = 'blanc';
    public $brand;
    public $model;

    public function __construct($brand = null, $model = null)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function drive()
    {
        return 'La '.$this->brand.' '.$this->model.' roule sur ses '.$this->wheel.' roues.';
    }

    public function klaxon()
    {
        return 'La voiture '.$this->color.' klaxonne.';
    }
}
