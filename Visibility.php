<?php

require_once "Product.php";

use Product\main\Product;


$product = new Product("Mie Goreng", "3500");

$product->getName();
$product->getPrice();
echo "Harga Discount : " . $product->getPriceAfterDiscount() . PHP_EOL;
$product->setDiscount(30.5);
echo "Harga Discount : " . $product->getPriceAfterDiscount() . PHP_EOL;
