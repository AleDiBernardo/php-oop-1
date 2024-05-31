<?php

class Movie {
    private string $title;
    private string $director;
    private string $release_date;
    private int $duration;
    private string $rating;
    private string $language;

    public function __construct(
        string $title,
        string $director,
        string $release_date,
        
    ) {
        $this->title = $title;
        $this->director = $director;
        $this->release_date = $release_date;

    }
   

    // GETTER METHODS
    public function getTitle(){
        return $this->title;
    }

    public function getDirector(): string {
        return $this->director;
    }

    public function getReleaseDate(): string {
        return $this->release_date;
    }

    public function getDuration(): int {
        return $this->duration;
    }

    public function getRating(): string {
        return $this->rating;
    }

    public function getLanguage(): string {
        return $this->language;
    }

    // SETTER METHODS
    public function setTitle(string $title){
        $this->title = $title;
    }

    public function setDirector(string $director){
        $this->director = $director;
    }

    public function setReleaseDate(string $release_date) {
        $this->release_date = $release_date;
    }

    public function setDuration(int $duration) {
        $this->duration = $duration;
    }

    public function setRating(string $rating) {
        $this->rating = $rating;
    }

    public function setLanguage(string $language) {
        $this->language = $language;
    }

}