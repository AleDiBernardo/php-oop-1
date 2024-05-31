<?php

require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/genre.php';
require_once __DIR__ . '/models/actor.php';

// Creazione istanze Movie
$movie1 = new Movie("Titolo1", "Regista1", "2022", new Genre(1, "horror", "lorem ipsum"));
$movie2 = new Movie("Titolo2", "Regista2", "2023", new Genre(2, "comedy", "lorem ipsum"));

$movie1->setDuration(123);
$movie2->setDuration(124);

// Creazione delle istanze attori
$actor1 = new Actor("Giovanni", "Verde", 69, 170);
$actor2 = new Actor("Michele", "Pagano", 37, 160);
$actor3 = new Actor("Simone", "Bonvecchio", 20, 190);
$actor4 = new Actor("Pietro", "Verde", 67, 170);
$actor5 = new Actor("Michelangelo", "Pagano", 37, 180);
$actor6 = new Actor("Walter", "Bonvecchio", 34, 167);

// Creazione array contenenti attori
$cast = [$actor1, $actor2, $actor3];
$cast2 = [$actor4, $actor5, $actor6];

// Settaggio dei cast
$movie1->setCast($cast);
$movie2->setCast($cast2);

var_dump($movie1->getTitle(), $movie1->getDirector(), $movie1->getReleaseDate(), $movie1->getGenre(), $movie1->getCast());
echo '<br><hr><br>';
var_dump($movie2->getTitle(), $movie2->getDirector(), $movie2->getReleaseDate(), $movie2->getGenre(), $movie2->getCast());
