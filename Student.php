<?php

$array = [
    "name" => "Rizal",
    "age" => 22
];

echo $array['name'];

// merubah array menjadi object lalu akan dibuatkan class dengan nama stdClass
$obj = (object) $array;
var_dump($obj);
