<?php

abstract class Animals
{
    public string $name;
    abstract public function run(): void;
}

class Cat extends Animals
{
    public function run(): void
    {
        echo "$this->name is running!";
    }
}
class Dog extends Animals
{
    public function run(): void
    {
        echo "$this->name is running!";
    }
}
