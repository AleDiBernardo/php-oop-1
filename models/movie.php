<?php

class Movie {
    private string $title;
    private string $director;
    private string $release_date;
    private int $duration;
    private string $rating;
    private string $language;
    private Genre $genre;

    public function __construct(
        string $title,
        string $director,
        string $release_date,
        Genre $genre
        
    ) {
        $this->title = $title;
        $this->director = $director;
        $this->release_date = $release_date;
        $this->genre = $genre;


    }
   

    // GETTER METHODS
    public function getTitle(){
        return $this->title;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getReleaseDate() {
        return $this->release_date;
    }

    public function getDuration(){
        return $this->duration;
    }

    public function getRating() {
        return $this->rating;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getGenre() {
        return $this->genre;
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