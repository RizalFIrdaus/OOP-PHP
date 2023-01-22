<?php


require_once "Animals.php";
require_once "Shelter.php";


$cat = new CatShelter();
$cat->adopt("Moja");
$dog = new DogShelter();
$dog->adopt("Uti");
