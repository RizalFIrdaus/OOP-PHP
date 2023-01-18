<?php

namespace Product\main;

class Product
{
    private string $name;
    private int $price;
    private float $discount;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
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
    public function getPriceAfterDiscount(): float
    {
        return $this->discount();
    }
    public function setDiscount(float $discount): float
    {
        return $this->discount = $discount;
    }
}