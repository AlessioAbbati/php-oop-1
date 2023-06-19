<?php

class movies {
    public string $title;
    public int $pubblicationYear;
    public string $genres;
    public string $actors;
    public string $directorName;

    public function __construct(string $title, int $pubblicationYear, string $genres = null, string $actors, string $directorName) {
        $this->title = $title;
		$this->pubblicationYear = $pubblicationYear;
		$this->genres = $genres;
        $this->actors = $actors;
		$this->directorName = $directorName;
		
    }

    public function getFullInfo()
	{
		return $this->title . ' ' . $this->pubblicationYear . ' ' . $this->genres . ' ' . $this->actors . ' ' . $this->directorName;
	}
}


