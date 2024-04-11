<?php

class Lasagna
{
    private $cookTime = 40;
    private $layerTime = 2;

    public function expectedCookTime()
    {
        return $this->cookTime;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return $this->cookTime - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        return $this->layerTime * $layers_to_prep;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        return $this->layerTime * $layers_to_prep + $elapsed_minutes;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
