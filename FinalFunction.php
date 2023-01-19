<?php


class Company
{
    private string $name;

    final public function getName()
    {
        return $this->name;
    }
    final public function setName(string $name)
    {
        $this->name = $name;
    }
}


final class Manager extends Company
{
    // Ga bisa di override function yang sudah final
    // public function getName()
    // {
    //     return 1;
    // }
}

final class Principal extends Company
{
}

$principal = new Principal();
$principal->setName("Rizal");
echo $principal->getName();
