<?php

namespace Data\Programmer;


class Programmer
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello()
    {
        echo "Hello, new recruiter programmer $this->name" . PHP_EOL;
    }
}

class BackendProgrammer extends Programmer
{
    public function sayHello(): void
    {
        echo "Hello, new recruiter Backend Programmer $this->name" . PHP_EOL;
    }
}

class FrontendProgrammer extends Programmer
{
    public function sayHello(): void
    {
        echo "Hello, new recruiter Frontend Programmer $this->name" . PHP_EOL;
    }
}

class Company
{
    var Programmer $programmer;

    public function hello(Programmer $programmer): void
    {
        echo $programmer;
    }
}

function sayHello(Programmer $programmer): void
{
    echo "Hello Programmer $programmer->name" . PHP_EOL;
}
