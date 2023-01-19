<?php

namespace Data\Person;


trait PersonalData
{
    public function Greeting(?string $name)
    {
        if (trim($name) != "") {
            $this->name = $name;
            echo "Hello! ,$name" . PHP_EOL;
        } else {
            echo "Hello sir !" . PHP_EOL;
        }
    }
}
// Function trait
trait Carrer
{
    public function upCarrer(): void
    {
        echo  "You has been promoted" . PHP_EOL;
    }
}
// Properties Trait
trait Data
{
    public string $name;
    public int $age;
    public string $address;
}
// Overriding Abstract Function
trait Getter
{
    protected abstract function getName(): void;
    protected abstract function getAge(): void;
}
trait Setter
{
    protected abstract function setAge(int $age);
    protected abstract function setName(string $name);
}

class Programmer
{
    use PersonalData, Carrer, Data, Getter, Setter;

    public function getAge(): void
    {
        echo "I'm $this->age years old" . PHP_EOL;
    }
    public function getName(): void
    {
        echo "My name is $this->name" . PHP_EOL;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
