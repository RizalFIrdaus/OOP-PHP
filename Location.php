<?php

namespace Data\Location;

abstract class Location
{
    private string $name;
    private int $zipcode;

    protected function __construct(string $name, int $zipcode)
    {
        $this->name = $name;
        $this->zipcode = $zipcode;
    }

    protected function getNameCity(): string
    {
        return $this->name;
    }

    protected function getZipCode(): int
    {
        return $this->zipcode;
    }
}

class City extends Location
{

    public function __construct(string $name, int $zipcode)
    {
        Parent::__construct($name, $zipcode);
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
