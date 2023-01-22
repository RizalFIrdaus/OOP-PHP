<?php


require_once "Animals.php";
require_once "Food.php";


interface Stray
{
    public function adopt(string $name): Animals;
}

class CatShelter implements Stray
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements Stray
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
