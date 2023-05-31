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