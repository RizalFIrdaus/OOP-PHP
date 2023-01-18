<?php

require_once "Location.php";
require_once "AbstractFunction.php";

use Data\Animal\Cat;
use Data\Location\City;

$location = new City("Jakarta", 14430);
$location->getName();
$location->getZip();

$cat = new Cat("Miaw");
$cat->run();
