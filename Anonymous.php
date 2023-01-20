<?php

// Tanpa Anonymous Class
// class Buah
// {
//     public string $name;

//     public function getName()
//     {
//         return $this->name;
//     }
// }

// $buah = new Buah();
// $buah->name = "Semangko";
// echo $buah->getName();


// Menggunakan Anonymous Class
// Gunanya adalah mempersingkat kode dalam membuat class yang simple seperti hanya menampilkan atau semacamnya
// Kalau class terdiri dari logic yang medium sampai advance complexitynya disarankan tidak menggunakan anonymous class
$buah = new class
{
    public string $name;

    public function getName()
    {
        return $this->name;
    }
};

$buah->name = "Semangko" . PHP_EOL;
echo $buah->getName();


// Another Way 

interface Hello
{
    public function HelloWorld(): void;
}

$hello = new class implements Hello
{

    public function HelloWorld(): void
    {
        echo "Hello World" . PHP_EOL;
    }
};

$hello->HelloWorld();


$name =  new class("Cihuahua")
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
};

echo $name->name . PHP_EOL;
echo $name->getName() . PHP_EOL;
