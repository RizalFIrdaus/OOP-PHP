<?php


require_once "Location.php";

use Data\Location\City;
use Data\Location\Location;

// $location = new Location();
$location = new City("Jakarta", 14430);
$location->getName();
$location->getZip();
