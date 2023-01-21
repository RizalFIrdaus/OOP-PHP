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

    // Function Overloading

    public function __call($name, $arguments)
    {
        $imp = implode(",", $arguments);
        echo "Overload Function name $name with arguments : $imp" . PHP_EOL;
    }
    public static function __callStatic($name, $arguments)
    {
        $result = 0;
        foreach ($arguments as $argue) {
            $result += $argue;
        }
        $imp = implode(",", $arguments);
        echo "Overload Static Function name $name with arguments : $imp" . PHP_EOL;
        return $result;
    }
}

$kosong = new Kosong();
$kosong->name = "Rizal";
$kosong->age = 22;
$kosong->address = "Cibitung";
$kosong->title = "Skom";
$kosong->getData("Rizal", 22, "Cibitung");
echo $kosong::sum(1, 2, 3, 4, 5);
