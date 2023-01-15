<?php

namespace Data\C1 {
    class Conflict
    {
        var int $a, $b;
        function __construct(float $a, float $b)
        {
            $this->a = $a;
            $this->b = $b;
        }
    }
    class Sum extends Conflict
    {
        function sum(): float
        {
            $sum = $this->a + $this->b;
            return $sum;
        }
    }
    class Multiple extends Conflict
    {
        function multiple(): float
        {
            $result = $this->a * $this->b;
            return $result;
        }
    }
}

namespace Data\C2 {
    class Conflict
    {
        var int $a, $b;
        function __construct(float $a, float $b)
        {
            $this->a = $a;
            $this->b = $b;
        }

        function substraction(): float
        {
            $sub = $this->a - $this->b;
            return $sub;
        }
    }
}
