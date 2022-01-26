<?php

class Unko
{
    private $animal;
    private $strength;

    public function __construct($animal, $strength)
    {
        $this->animal = $animal;
        $this->strength = $strength;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getAnimalAndUnkoStrength()
    {
        return $this->animal . "のうんこは" . $this->strength;
    }
}