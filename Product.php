<?php

namespace Product\main;

class Product
{
    private string $name;
    private int $price;
    private float $discount;
    protected string $author;

    public function __construct(string $name, int $price, string $author)
    {
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
    }

    public function getName(): void
    {
        echo "Nama Produk : $this->name" . PHP_EOL;
    }

    public function getPrice(): void
    {
        echo "Harga Produk : $this->price" . PHP_EOL;
    }
    private function discount(): float
    {
        if (isset($this->discount)) {
            $result = $this->price - ($this->price * ($this->discount / 100));
        } else {
            $result = $this->price;
        }
        return $result;
    }
    protected function getPriceAfterDiscount(): float
    {
        return $this->discount();
    }
    protected function setDiscount(float $discount): float
    {
        return $this->discount = $discount;
    }
    public function info(): void
    {
        echo "Nama Author Product : $this->author" . PHP_EOL;
    }
}

class detailProduct extends Product
{

    public function info(): void
    {
        echo "Nama Author Detail Product : $this->author" . PHP_EOL;
    }

    public function setDis(float $dis): float
    {
        return $this->setDiscount($dis);
    }
    public function getPAD(): void
    {
        echo "Harga Discount : " . $this->getPriceAfterDiscount() . PHP_EOL;
    }
}
