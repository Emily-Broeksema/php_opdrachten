<?php

class Product
{

    public $name;

    public $Price;

    public $currency;
    
    public function __construct($price, $name = "een game", $currency = "&euro")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    

    public function formatPrice()
    {
        return number_format($this->price, decimals:2);
    }

    public function getProduct()
    {
        return "Het product ".$this->name." kost ".$this->currency." ".$this->price;
    }
}

$game1 = new Product(price: 40, name: "&fifa 2023", currency:"$");
echo $game1->getProduct();



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