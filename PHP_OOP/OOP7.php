<?php

class Product
{
    
    public function __construct(public $price, public $name, public $currency = "&euro")
    {
        $this->name = ucfirst($name);
        
    }

    

    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }
}

$game1 = new Product(price: 40, name: "fifa 2023", currency: "$");




//$game2 = new Product(name: "bla", price: 50);
//$game2->name = "call of duty";
//$game2->price = 10;


//echo $game1->formatPrice();

echo $game1->name."<br>";
echo $game1->currency;
echo $game1->price;

var_dump($game1);
//var_dump($game2);

?>