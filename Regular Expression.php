<?php
$matches = [];
$string = "Nama saya muhamamd rizal firdaus, saya berasal dari jawa timur, muhammad memiliki makna yaitu menjadi anak yang mulia, rizal dalam bahasa arab artinya laki laki, dan firdaus adalah surga paling tertinggi";

$search = (bool)preg_match_all("/rizal/i", $string, $matches);
var_dump($search);
var_dump($matches);

$replace = preg_replace("/anjing|bangsat/i", "***", "Dasar lo,ANJING bangsat!!");
var_dump($replace);

$split = preg_split("/[\s,-,]/", $string);
var_dump($split);
