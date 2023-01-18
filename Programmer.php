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
}

function sayHello(Programmer $programmer): void
{
    // $programmer instanceof FrontendProgrammer ?
    //     $display =  "Hello Frontend Programmer $programmer->name" . PHP_EOL
    //     : $display =  "Hello Backend Programmer $programmer->name" . PHP_EOL;
    // echo $display;

    if ($programmer instanceof BackendProgrammer) {
        echo  "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo  "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else {
        echo  "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
