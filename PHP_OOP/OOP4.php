<?php

class Product
{
    public $name;

    public $price;

    public function setName($name)
    {
        $this->name = ucfirst($name);
    }
    

    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$game1 = new Product();
$game1->setName("fifa 2023");


$game1->price = 40;

$game2 = new Product();
$game2->name = "call of duty";
$game2->price = 10;

echo $game1->formatPrice();
echo $game1->name."<br>";
echo $game1->price;

var_dump($game1);
?>