<?php

require_once "Shape.php";

use Data\Shape\Triangle;


$x = 8;
$y = 12;

$triangle = new Triangle($x, $y);

// Parent and overriding function
$triangle->getCornerX();
$triangle->getCornerY();
// end

$triangle->result();
$triangle->resultWithMulti(2);
