<?php

use Data\Person\Programmer;

require_once "Trait.php";



$programmer = new Programmer();
$programmer->Greeting("Rizal");
echo $programmer->upCarrer();
$programmer->getName();
$programmer->setAge(22);
$programmer->getAge();
