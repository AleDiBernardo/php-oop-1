<?php

require_once __DIR__  .  '/models/movie.php';

$movie1 = new Movie("Titolo","Regista","2022");

$movie1->setDuration(123);

var_dump($movie1->getTitle(), $movie1->getDuration());

