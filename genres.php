<?php

class genres
{
    public string $genre;

    public function __construct(string $genre,)
    {
        $this->genre = $genre;
    }

    public function __toString()
    {
        return $this->genre;
    }
}