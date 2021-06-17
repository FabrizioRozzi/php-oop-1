<?php

class Movie{
  
  public $titolo;
  public $genere;
  public $trama;
  public $durata;
  private $prezzo;
}

function __construct($_titolo, $_genere, $_trama, $_durata) {
  $this->titolo = $_titolo;
  $this->genere = $_genere;
  $this->trama = $_trama;
}

function setPrezzo($_prezzo){
  $this->prezzo = $_prezzo;
}

function getPrezzo(){
  return $this->prezzo . " euro";
}

?>