<?php

namespace Data\Shape;

class Shape
{
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    protected function getCornerX()
    {
        return $this->x;
    }
    protected function getCornerY()
    {
        return $this->y;
    }
    protected function multiShape(float $multi): float
    {
        return $this->getCornerX() * $this->getCornerX() * $multi;
    }
}

class Triangle extends Shape
{
    private float $result;

    public function getCornerX(): void
    {
        echo "Corner X : " . parent::getCornerX() . PHP_EOL;
    }
    public function getCornerY(): void
    {
        echo "Corner Y : " . parent::getCornerY() . PHP_EOL;
    }

    public function result(): void
    {
        echo "Hasil : " . $this->formula() . PHP_EOL;
    }

    public function resultWithMulti(float $multi): void
    {
        echo "Hasil : " . $this->multiShape($multi) . PHP_EOL;
    }

    private function formula(): float
    {
        return $this->result = ($this->x * $this->y) / 2;
    }

    protected function multiShape(?float $multi): float
    {
        if (isset($multi)) {
            return $this->result * $multi;
        } else {
            return $this->result;
        }
    }
}
