<?php

include_once "Product.php";
include_once "PieceGood.php";

class EGood extends Product {

    private PieceGood $piecePrice;

    public function __construct(string $name, string $description, float $price, PieceGood $piecePrice)
    {
        parent::__construct($name, $description, $price);
        $this->piecePrice = $piecePrice;
    }

    public function endPrice(): float
    {
        return (floatval($this->piecePrice)) / 2;
    }
}