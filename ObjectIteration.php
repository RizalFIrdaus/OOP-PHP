<?php

// Iterasi Object
class data
{
    public string $nama = "Rizal";
    private float $saldo = 30500;
    public int $umur = 22;
}

$datas = new Data();

foreach ($datas as $property => $data) {
    echo "$property : $data" . PHP_EOL;
}
