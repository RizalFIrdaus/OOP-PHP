<?php

class Bank
{
    private string $nama;
    private int $norek;
    private float $saldo;

    public function __construct(string $nama, int $norek, float $saldo)
    {
        $this->nama = $nama;
        $this->norek = $norek;
        $this->saldo = $saldo;
    }
    public function setNama(string $nama)
    {
        $this->nama = $nama;
    }
    public function GetNama()
    {
        echo $this->nama . PHP_EOL;
    }
    public function getNorek()
    {
        echo $this->norek . PHP_EOL;
    }
    public function getSaldo()
    {
        echo "Rp.$this->saldo" . PHP_EOL;
    }
}
