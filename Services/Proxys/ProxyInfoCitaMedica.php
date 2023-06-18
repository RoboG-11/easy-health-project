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

  public function getDoctoresByEstablecimiento($establecimiento)
  {
    return $this->conector->showDoctoresByEstablecimiento($establecimiento);
  }

  public function getAllPlaces()
  {
    return $this->conector->showAllPlaces();
  }

  public function getIdEstablecimientoByName($nombre)
  {
    return $this->conector->getIdPlace($nombre);
  }
}
