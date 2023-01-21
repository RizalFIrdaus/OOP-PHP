<?php

$array = [
    "name" => "Rizal",
    "age" => 22
];

// echo $array['name'];

// merubah array menjadi object lalu akan dibuatkan class dengan nama stdClass
$obj = (object) $array;
// var_dump($obj);

trait Data
{
    private string $name;
    private int $age;
    private string $address;
}
interface Setter
{
    public function setName(string $name);
    public function setAge(int $age);
    public function setAddress(string $address);
}

class Student implements Setter
{
    use Data;

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function setAddress(string $address)
    {
        $this->address = $address;
    }
}
