<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzaNumber, $peopleNumber)
    {
        return $pizzaNumber * (($peopleNumber * 20) + 200);
    }

    public function calculateSauceRequirement($pizzaNumber, $canVolume)
    {
        return $pizzaNumber * 125 / $canVolume;
    }

    public function calculateCheeseCubeCoverage($cheeseDimension, $thickness, $diameter)
    {
        return floor(($cheeseDimension**3) / ($thickness * pi() * $diameter));
    }

    public function calculateLeftOverSlices($pizzaNumber, $peopleNumber)
    {
        return ($pizzaNumber * 8) % $peopleNumber;
    }
}
