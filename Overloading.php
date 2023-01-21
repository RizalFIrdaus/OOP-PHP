<?php
/*
Overloading itu menginstansiasi properti atau function walau tidak ada properties di object tersebut
 */


class Kosong
{
    //  Overloading Properties

    private array $properties;

    public function __get($name)
    {
        return $this->properties[$name];
    }
    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }
    public function __unset($name)
    {
        return $this->properties[$name];
    }
    public function __isset($name)
    {
        return $this->properties[$name];
    }
    public function __toString(): string
    {
        $prop = implode("-", $this->properties);
        return "Value : $prop";
    }
    public function getProp()
    {
        return $this->properties;
    }
}

$kosong = new Kosong();
$kosong->name = "Rizal";
$kosong->age = 22;
$kosong->address = "Cibitung";
$kosong->title = "Skom";

echo $kosong->address;
