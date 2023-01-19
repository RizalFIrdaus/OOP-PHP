<?php

use Data\Person\Programmer;
use Data\Trait\Conflict\Mamals;

require_once "Trait.php";
require_once "ConflictTrait.php";


$cat = new Mamals();
$cat->run();
$cat->walk();


// $programmer = new Programmer();
// $programmer->Greeting("Rizal");
// echo $programmer->upCarrer();
// $programmer->getName();
// $programmer->setAge(22);
// $programmer->getAge();
