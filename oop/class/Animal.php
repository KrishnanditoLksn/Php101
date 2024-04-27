<?php

class Animal
{
    public  $animal_name;
    public $animal_sex;

    private $animal_age;

    public function setAnimalAge($age)
    {
        $animal_age = trim($age);
        if ($animal_age == ' ') {
            return "Empty name !!";
        }
        $this->animal_age = $age;
    }

    public function getAnimalAge()
    {
        return $this->animal_age;
    }

    public function getAnimalName()
    {
        return $this->animal_name;
    }

    public function getAnimalSex()
    {
        return $this->animal_sex;
    }


    public function isAnimalOld()
    {
        if ($this->getAnimalAge() > 5) {
            echo $this->getAnimalName(), "Old animal";
        } else {
            $this->animal_age += 1;
        }
    }
}

//create new object 
$animal = new Animal();
//set a property
$animal->animal_name = "Anima";
$animal->animal_sex = "Male";
echo ($animal->getAnimalName());
echo $animal->getAnimalSex();
$animal->setAnimalAge(23);
echo "Age : ", $animal->getAnimalAge();

$animal->isAnimalOld();
