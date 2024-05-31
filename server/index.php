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

$movie1->addCastActor($actor1);
$movie1->addCastActor($actor2);
$movie1->addCastActor($actor3);

$movie2->addCastActor($actor4);
$movie2->addCastActor($actor5);
$movie2->addCastActor($actor6);
// $cast = [$actor1, $actor2, $actor3];
// $cast2 = [$actor4, $actor5, $actor6];

// Settaggio dei cast
// $movie1->setCast($cast);
// $movie2->setCast($cast2);

// var_dump($movie1->getCast());

// var_dump($movie1->getTitle(), $movie1->getDirector(), $movie1->getReleaseDate(), $movie1->getGenre(), $movie1->getCast());
// echo '<br><hr><br>';
// var_dump($movie2->getTitle(), $movie2->getDirector(), $movie2->getReleaseDate(), $movie2->getGenre(), $movie2->getCast());

$movies_list = [$movie1, $movie2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP</title>
</head>
<body>

    <div class="container">
        <div class="row gap-4 justify-content-center">
            <?php for ($i = 0; $i < count($movies_list); $i++) {?>
                <div class="card" style="width: 18rem;">
                    <div class="card-header fw-bold">
                    <?=$movies_list[$i]->getTitle();?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?=$movies_list[$i]->getDirector();?></li>
                        <li class="list-group-item"><?=$movies_list[$i]->getReleaseDate();?></li>
                        <li class="list-group-item"><?=$movies_list[$i]->getGenre()->getName()?></li>
                        <li class="list-group-item">
                            <div>Cast: </div>
                            <?php for ($j = 0; $j < count($movies_list[$i]->getCast()); $j++) {?>
                                <?=$movies_list[$i]->getCast()[$j]->getName() . " " . $movies_list[$i]->getCast()[$j]->getSurname()?>
                                <?= '<br>'; ?>
                            <?php }?>
                        </li>
                        <li class="list-group-item"><?=$movies_list[$i]->getGenre()->getDescription()?></li>
                    </ul>
                </div>
            <?php }?>
        </div>
    </div>


</body>
</html>
