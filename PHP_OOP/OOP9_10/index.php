<?php 

declare(strict_types=1);

require_once 'Movie.php';

$movie1 = new Movie(name: "Avatar", genre: 'fantasy', seen:5);

echo $movie1->getName();

var_dump($movie1)

?>