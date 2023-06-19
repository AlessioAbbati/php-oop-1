<?php

class movies {
    public string $title;
    public int $pubblicationYear;
    public string $genre;
    public string $actors;
    public string $directorName;

    public function __construct(string $title, int $pubblicationYear, string $genre, string $actors, string $directorName) {
        $this->title = $title;
		$this->pubblicationYear = $pubblicationYear;
		$this->genre = $genre;
        $this->actors = $actors;
		$this->directorName = $directorName;
		
    }

    public function getFullInfo()
	{
		return $this->title . ' ' . $this->pubblicationYear . ' ' . $this->genre . ' ' . $this->actors . ' ' . $this->directorName;
	}
}


