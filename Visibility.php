<?php

require_once "Product.php";

use Product\main\detailProduct;
use Product\main\Product;


$product = new Product("Mie Goreng", "3500", "Rizal");
$product->getName();
$product->getPrice();
$product->info();
$product2 = new detailProduct("Mie Sedap", 4000, "Esan");
$product2->info();
$product2->getPAD();
$product2->setDis(30.5);
$product2->getPAD();
