<?php

class Movie
{
    public string $name;

    public string $genre;

    public string $seen;

    

    public function __construct( string $name, string $genre,string  $seen)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->seen = $seen;
    }

    public function getName()
    {
        return $this->name;
    }
}
?>