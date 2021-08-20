<?php

class WeightGood extends Product
{
    // Вес в граммах
    private int $weight;

    // $price - стоимость за килограмм 
    public function __construct(string $name, string $description, float $price, int $weight)
    {
        parent::__construct($name, $description, $price);
        $this->weight = $weight;
    }

    public function endPrice(): float
    {
        return round($this->getPrice() / 1000 * $this->getWeight(), 2);
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}