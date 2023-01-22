<?php


require_once "Animals.php";


interface Stray
{
    public function adopt(string $name): Animals;
}

class CatShelter implements Stray
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = "Meow";
        return $cat;
    }
}
