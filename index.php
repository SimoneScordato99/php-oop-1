<?php

class Movie{
    public $titolo;
    public $generi;
    public $durata;

    public function __construct($_titolo, Generi $_generi, $_durata){
        $this->titolo = $_titolo;
        $this->generi = $_generi;
        $this->durata = $_durata;
    }
    public function mario($_titoloUpp){
        return $this->titolo = 'titolo='. ' ' . strtoupper($_titoloUpp);
    }


}

class Generi{
    public $genere1;
    public $genere2;
    public $genere3;

    public function __construct($_genere1 , $_genere2 , $_genere3 ){
        $this->genere1 = $_genere1;
        $this->genere2 = $_genere2;
        $this->genere3 = $_genere3;
    }

}

$avengers = new Movie('avengers', new Generi('maiale', 'porco', 'suino'), '2:30');
$titanic = new Movie('titanic', new Generi('cavallo', 'giumenta', 'pony'), '3:00');
var_dump($avengers , $titanic);
echo $avengers->titolo;
echo $avengers->generi->genere1;
echo $avengers->generi->genere2;
echo $avengers->generi->genere3;
echo $avengers->durata;

echo $titanic->titolo;
echo $titanic->generi->genere1;
echo $titanic->generi->genere2;
echo $titanic->generi->genere3;
echo $titanic->durata;


echo $titanic -> mario('titanic');
var_dump($titanic);

?>