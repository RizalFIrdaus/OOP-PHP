<?php

class Character
{
    const AUTHOR = "Muhammad Rizal Firdaus";
    var ?string
        $weap,
        $shield,
        $armor,
        $muffler,
        $shoes,
        $facc,
        $sacc,
        $talisman;
    var int
        $int,
        $str,
        $dex,
        $luck,
        $vit,
        $agi;

    function HealthPoint(int $value): int
    {
        $hp = $value;
        return $hp;
    }
    function Job(int $value): int
    {
        switch ($value) {
            case $value >= 0 && $value < 10000:
                $job_level = 1;
                return $job_level;
                break;
            case $value < 50000:
                $job_level = 2;
                return $job_level;
                break;
        }
    }
    function Base(int $value): int
    {
        switch ($value) {
            case $value >= 0 && $value < 10000:
                $base_level = 1;
                return $base_level;
                break;
            case $value < 50000:
                $base_level = 2;
                return $base_level;
                break;
        }
    }
    function baseStat(?int $value)
    {
        if (is_null($value)) {
            echo "Base stat :" . $this->int . PHP_EOL;
        } else {
            echo "Base stat :" . $this->int + $value . PHP_EOL;
        }
    }
}
