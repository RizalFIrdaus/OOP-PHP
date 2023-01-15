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

        function sum(): float
        {
            $sum = $this->a + $this->b;
            return $sum;
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
