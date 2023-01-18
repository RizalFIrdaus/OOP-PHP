<?php

namespace Data\Animal;

abstract class Animal
{
    protected string $name;

    abstract protected function run(): void;
}

class Cat extends Animal
{

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        echo "$this->name is running";
    }
}
