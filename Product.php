<?php
/* 
5 - статическая переменная принадлежит классу, поэтому она всегда будет увеличиваться и храниться
5_2 - b1 - вызов уже совершенно нового класса, поэтому в каждом классе своя переменная X
*/

class Product
{
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $name, string $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function toDollars(float $course): ?float
    {
        return ($course > 0) ? $this->getPrice()/$course : null;
    }

    public function __toString(): string
    {
        return $this->getName() . " (" . $this->getDescription() . "), Цена: " . $this->getPrice();
    }
}