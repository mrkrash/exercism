<?php

class PizzaPi
{
    private $saucesPerPizza = 125;
    private $slices = 8;
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return  $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauces)
    {
        return $pizzas * $this->saucesPerPizza / $sauces;
    }

    public function calculateCheeseCubeCoverage($cheeseDimension, $thickness, $diameter)
    {
        return floor($cheeseDimension**3 / ($thickness * 3.14 * $diameter));
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return ($pizzas * $this->slices) % $friends;
    }
}
