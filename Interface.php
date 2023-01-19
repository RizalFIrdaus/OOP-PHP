<?php

use Data\Animals\{Cat};

require_once "Animal.php";

$cat = new Cat();
$cat->setName("Cat");
$cat->setFood("Fish");
$cat->run();
$cat->food();
$cat->setName("Dog");
$cat->setFood("Meet");
$cat->run();
$cat->food();
$cat->isHealt();
$cat->Sound();
