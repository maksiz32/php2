<?php

class PieceGood extends Product
{
    public function __construct(string $name, string $description, float $price)
    {
        parent::__construct($name, $description, $price);
    }
    public function endPrice(): float
    {
        return $this->getPrice();
    }
}