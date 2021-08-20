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
        $date = new DateTime( $expiration);
        $this->expiration = $date->format('Y-m-d');
    }

    public function __toString()
    {
        return $this->getName() . " (" . $this->getDescription() . "), Цена: " . 
            $this->getPrice() . "/" . PHP_EOL . "Годен до " . $this->getExpiration();
    }

    public function getExpiration()
    {
        $date = new DateTime($this->expiration);
        return $date->format('d-m-Y');
    }

    public function endPrice()
    {
        $this->getPrice();
    }
}