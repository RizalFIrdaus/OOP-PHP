<?php

// Static php biasanya digunakan untuk helper atau utiliti

namespace Helper;


class Helpers
{
    static string $repo = "Helper" . PHP_EOL;

    static function HelloWorld(): void
    {
        echo "Hello World" . PHP_EOL;
    }
    static function sum(...$numbers): float
    {
        $result = 0;
        foreach ($numbers as $number) {
            $result += $number;
        }
        return $result;
    }
    static function multi(...$numbers): float
    {
        $result = 1;
        foreach ($numbers as $number) {
            $result *= $number;
        }
        return $result;
    }
}
