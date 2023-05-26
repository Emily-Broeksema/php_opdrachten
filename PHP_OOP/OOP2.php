<?php

class Product 
{
    public $name = "Een bepaald spel";
}


$game1 = new Product();
$game1->name = "Fifa 2023";

$game2 = new Product();
$game2->name = "Call of Duty";

$game3 = new Product();
$game3->name = "Pong";


var_dump($game1);
var_dump($game2);

echo $game1->name."<br>";
echo $game2->name."<br>";
echo $game3->name;

$game1->name = "Fifa 2022";
echo $game1->name;

var_dump($game1);
var_dump($game2);
?>