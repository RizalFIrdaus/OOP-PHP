<?php

namespace Data\Trait\Conflict;

trait Person
{
    public function run(): void
    {
        echo "Person is running with 2 legs" . PHP_EOL;
    }
    public function walk(): void
    {
        echo "Walk with 2 legs" . PHP_EOL;
    }
}

trait Animal
{
    public function run(): void
    {
        echo "Animal is running with 4 legs" . PHP_EOL;
    }
    public function walk(): void
    {
        echo "Walk with 4 legs" . PHP_EOL;
    }
}

class Mamals
{
    /* 
    Handling Conflict Function in trait 
    */
    use Person, Animal {
        // Pada trait person kan ada 2 function run, function run yang digunakan itu yang ada pada trait animal
        Animal::run insteadof Person;
        // Kalo ini untuk handle conflict function walk, yang digunakan itu function yang ada pada trait person
        Person::walk insteadof Animal;
    }
}
