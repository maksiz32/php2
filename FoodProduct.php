<?php

include_once ("Product.php");

/** Класс для продуктов
* @param expiration - срок годности - текст в формате 'Y-m-d'
*/

class FoodProduct extends Product
{
    private string $expiration;

    public function __construct(string $name, string $description, float $price, string $expiration)
    {
        parent::__construct($name, $description, $price);
        $this->expiration = $expiration;
    }
}