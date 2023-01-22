<?php


require_once "Animals.php";
require_once "Shelter.php";
require_once "Food.php";


$catShelter = new CatShelter();
$dogShelter = new DogShelter();
$cat = $catShelter->adopt("Moja");
$cat->eat(new AnimalFood());
$cat->run();
$dog = $dogShelter->adopt("Uti");
$dog->eat(new Food());
$dog->run();
