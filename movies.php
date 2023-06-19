<?php

class movies {
    public string $title;
    public int $pubblicationYear;
    public array $genres;
    public string $actors;
    public string $directorName;

    public function __construct(string $title, int $pubblicationYear, array $genres, string $actors, string $directorName) {
        $this->title = $title;
		$this->pubblicationYear = $pubblicationYear;
		$this->genres = $genres;
        $this->actors = $actors;
		$this->directorName = $directorName;
		
    }

    public function getFullInfo()
    {
        $genreString = implode(', ', $this->genres);
        return $this->title . ' ' . $this->pubblicationYear . ' ' . $genreString . ' ' . $this->actors . ' ' . $this->directorName;
    }
}


