<?php

// Iterasi Object
class data implements IteratorAggregate
{
    public string $nama = "Rizal";
    private float $saldo = 30500;
    public int $umur = 22;

    public function getIterator(): Traversable
    {
        $array = [
            "name" => "rizal",
            "age" => 22,
            "address" => "Jln Jendral Basukirahmat"
        ];
        return new ArrayIterator($array);
    }
}

$datas = new Data();

foreach ($datas as $property => $data) {
    echo "$property : $data" . PHP_EOL;
}
