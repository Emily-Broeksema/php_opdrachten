<?php

class Movie
{
    public $name;

    Public $genre;

    public $seen;

    /**
     * @param string $name
     * @param string $genre
     * @param int $seen
     */


    public function __construct(string $name, string $genre,string $seen)
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