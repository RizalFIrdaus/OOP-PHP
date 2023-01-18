<?php

namespace Data\Location;

abstract class Location
{
    protected string $name;
    protected int $zipcode;

    protected function __construct(string $name, int $zipcode)
    {
        $this->name = $name;
        $this->zipcode = $zipcode;
    }

    abstract protected function getNameCity(): string;
    abstract protected function getZipCode(): int;
}

class City extends Location
{

    public function __construct(string $name, int $zipcode)
    {
        Parent::__construct($name, $zipcode);
    }

    public function getNameCity(): string
    {
        return $this->name;
    }
    public function getZipCode(): int
    {
        return $this->zipcode;
    }

    public function getName(): void
    {
        echo "Nama kota : " . $this->getNameCity() . PHP_EOL;
    }
    public function getZip(): void
    {
        echo "Zip Code : " . $this->getZipCode() . PHP_EOL;
    }
}
