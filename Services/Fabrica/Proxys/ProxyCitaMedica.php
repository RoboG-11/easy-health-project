<?php

include_once 'conectorBD.php';

class ProxyCitaMedica
{
  private $conector;
  private $doctores;
  private $establecimientos;

  public function __construct($doctores, $establecimientos)
  {
    $this->conector = new ConectorBD();
    $this->doctores = $doctores;
    $this->establecimientos = $establecimientos;
  }

  public function getAllDoctors(){

  }

  public function getAllPlaces(){
    
  }
}
