<?php

namespace Data\Animals;


interface Animal extends Healty
{
    public function run(): void;
    public function food(): void;
}
interface Sound
{
    public function Sound(): void;
}
interface Healty
{
    public function isHealt(): bool;
}

class Cat implements Animal, Sound
{
    private string $name;
    private string $food;

    public function Sound(): void
    {
        echo "Meoww....!" . PHP_EOL;
    }

    public function isHealt(): bool
    {
        return true;
    }
    public function run(): void
    {
        echo "$this->name is running" . PHP_EOL;
    }
    public function food(): void
    {
        echo "$this->name eats $this->food" . PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): void
    {
        echo "Hello, i'am $this->name" . PHP_EOL;
    }
    public function setFood(string $food)
    {
        $this->food = $food;
    }
    public function getFood(): void
    {
        echo "Hello, my food is $this->food" . PHP_EOL;
    }
}

class Dog implements Animal, Sound
{
    private string $name;
    private string $food;

    public function Sound(): void
    {
        echo "Guk Guk....!" . PHP_EOL;
    }

    public function isHealt(): bool
    {
        return true;
    }
    public function run(): void
    {
        echo "$this->name is running" . PHP_EOL;
    }
    public function food(): void
    {
        echo "$this->name eats $this->food" . PHP_EOL;
    }
}
