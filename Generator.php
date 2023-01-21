<?php


trait data
{
    protected $array = [];
}
interface getData
{
    public function getGanjil(int $max): Iterator;
}

$gen = new class implements getData
{
    use data;

    // Tidak boleh di clone
    public function __clone()
    {
        unset(self::$array);
    }

    // Without Generator
    // Menggunakan array untuk passing data ke array iterator
    public function getGanjil(int $max): Iterator
    {
        for ($i = 1; $i < $max; $i++) {
            if ($i % 2 == 1) {
                $array[] = $i;
            }
        }
        return new ArrayIterator($array);
    }


    // With Generator
    // Tidak perlu menggunakan data array cukup menggunakan keyword yield
    public function getGenap(int $max): Iterator
    {
        for ($i = 1; $i < $max; $i++) {
            if ($i % 2 == 0) {
                yield $i;
            }
        }
    }

    public function oddEven(int $max): Iterator
    {
        for ($i = 1; $i < $max; $i++) {
            if ($i % 2 == 0) {
                yield $i => "Even";
            } else {
                yield $i => "Odd";
            }
        }
    }
};

// Instansiasi Object
$ganjil = $gen->getGanjil(100);
$genap = $gen->getGenap(100);
$clone = clone $ganjil;
var_dump($ganjil);
// foreach ($ganjil as $data) {
//     echo "Ganjil : $data" . PHP_EOL;
// }
// foreach ($genap as $data) {
//     echo "Genap : $data" . PHP_EOL;
// }
// $oddeven = $gen->oddEven(100);
// foreach ($oddeven as $property => $value) {
//     echo "$property -> $value" . PHP_EOL;
// }