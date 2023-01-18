<?php

require_once "Product.php";

use Product\main\detailProduct;
use Product\main\Product;


$product = new Product("Mie Goreng", "3500");
$product->getName();
$product->getPrice();
$product2 = new detailProduct("Mie Sedap", 4000);
$product2->getPAD();
$product2->setDis(30.5);
$product2->getPAD();
