<?php

require_once "Product.php";

use Product\main\Product;


$product = new Product("Mie Goreng", "3500");

echo "Nama Produk : " . $product->getName() . PHP_EOL;
echo "Harga Produk : " . $product->getPrice() . PHP_EOL;
echo "Harga Discount : " . $product->getPriceAfterDiscount() . PHP_EOL;
$product->setDiscount(30.5);
echo "Harga Discount : " . $product->getPriceAfterDiscount() . PHP_EOL;
