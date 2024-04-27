<?php

class Animal
{
    public  $animal_name;
    public $animal_sex;

    public function getAnimalName()
    {
        return $this->animal_name;
    }
}

//create new object 
$animal = new Animal();
$animal->$animal_name = "Anima";
$animal->getAnimalName();
var_dump($animal);
