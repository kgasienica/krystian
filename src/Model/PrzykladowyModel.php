<?php

namespace App\Model;

class PrzykladowyModel
{
    public $x;

    public function __construct($x)
    {
        $this->x = $x;
    }

    public function wyswietlX()
    {
        dump($this->x);
    }
}
