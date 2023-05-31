<?php

class Movie{
    public $titolo;
    public $genere;
    public $durata;

    public function __construct($_titolo, $_genere, $_durata){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }
    public function mario($_titoloUpp){
        return $this->titolo = 'titolo='. ' ' . strtoupper($_titoloUpp);
    }


}

$avengers = new Movie('avengers', 'shi-fi', '2:30');
$titanic = new Movie('titanic', 'drammatico', '3:00');
var_dump($avengers , $titanic);
echo $avengers->titolo;
echo $avengers->genere;
echo $avengers->durata;

echo $titanic->titolo;
echo $titanic->genere;
echo $titanic->durata;


var_dump($titanic);
echo $titanic -> mario('titanic');

?>