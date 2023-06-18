<?php

include_once 'conectorBD.php';

class ProxyCitaMedica
{
  private $conector;
  private $doctores;
  private $establecimientos;

  public function __construct()
  {
    $this->conector = new ConectorBD();
    //$this->doctores = $doctores;
    //$this->establecimientos = $establecimientos;
  }

  public function getDoctors($nombre)
  {
    $idPlace =  $this->conector->getIdPlace($nombre);
    echo $idPlace;
  }

  public function getAllPlaces()
  {
    return $this->conector->showAllPlaces();
  }

}
