<?php

namespace App\Model;

class CalculateModel
{
    public function addTwoNumbers($x, $y)
    {
        $przykladowyModel = new PrzykladowyModel(1);

        $przykladowyModel->wyswietlX(); // Wyswietli 1
        $przykladowyModel->x = $x;
        $przykladowyModel->wyswietlX(); // Wyswietli 5

        return $przykladowyModel->x + $y;
    }
}
