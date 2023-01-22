<?php

require_once "Food.php";

abstract class Animals
{
    public string $name;
    abstract public function run(): void;
    abstract public function eat(AnimalFood $food): void;
}

class Cat extends Animals
{
    public function run(): void
    {
        echo "$this->name is running!" . PHP_EOL;
    }
    public function eat(AnimalFood $food): void
    {
        echo "$this->name is eating" . PHP_EOL;
    }
}
class Dog extends Animals
{
    public function run(): void
    {
        echo "$this->name is running!" . PHP_EOL;
    }
    public function eat(Food $food): void
    {
        echo "$this->name is eating" . PHP_EOL;
    }
}
