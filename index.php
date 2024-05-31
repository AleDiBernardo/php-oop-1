<?php

require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/genre.php';

$movie1 = new Movie("Titolo1", "Regista1", "2022", new Genre(1, "horror", "lorem ipsum"));
$movie2 = new Movie("Titolo2", "Regista2", "2023", new Genre(2, "comedy", "lorem ipsum"));

$movie1->setDuration(123);
$movie2->setDuration(124);

var_dump($movie1->getTitle(), $movie1->getDirector(),
    $movie1->getReleaseDate(), $movie1->getDuration(), $movie1->getGenre());

echo '<br>';
echo '<hr>';
echo '<br>';

var_dump($movie2->getTitle(), $movie2->getDirector(),
    $movie2->getReleaseDate(), $movie2->getDuration(), $movie2->getGenre());
