<?php

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
        echo "$this->name is running!";
    }
    public function eat(AnimalFood $food): void
    {
        echo "$food";
    }
}
class Dog extends Animals
{
    public function run(): void
    {
        echo "$this->name is running!";
    }
    public function eat(Food $food): void
    {
        echo "$food";
    }
}
