<?php

class Product
{
    public $name;

    public $price;

    public function __construct($name, $price)
    {
        $this->name = ucfirst($name);
        $this->price = $price;
    }

    

    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$game1 = new Product(name: "fifa 2023", price: 40);




$game2 = new Product(name: "bla", price: 50);
$game2->name = "call of duty";
$game2->price = 10;


echo $game1->formatPrice();
echo $game1->name."<br>";
echo $game1->price;

var_dump($game1);
var_dump($game2);

?>