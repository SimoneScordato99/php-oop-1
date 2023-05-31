<?php
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/generi.php';


$arrayFilm = [
    $avengers = new Movie('Avengers', new Generi('azione', 'fantascienza', 'guerra'), '2:30'),
    $titanic = new Movie('Titanic', new Generi('drammatico', 'sentimentale', 'storico'), '3:00'),
    $ioRobot = new Movie('Io, Robot', new Generi('azione', 'fantascienza', 'thriller'), '3:00'),
    $treUomini = new Movie('Tre uomini e una gamba', new Generi('commedia', '', ''), '3:00'),
    $jurassicPark  = new Movie('Jurassic Park ', new Generi('avventura', 'fantascienza', ''), '3:00'),
];