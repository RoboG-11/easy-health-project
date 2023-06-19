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

  public function getNombresDoctores($id){
    return $this->conector->showNameDoctor($id);
  }

  public function getDoctor($nombre){
    return $this->conector->getCuentaDoctorByNombre($nombre);
  }

  public function getEstablecimiento($nombre){
    return $this->conector->getEstablecimientoByName($nombre);
  }

  public function setCitaMedica($idCita, $doctor, $paciente, $horario, $establecimiento, $fecha){
    return $this->conector->setCitaMedica($idCita, $doctor, $paciente, $horario, $establecimiento, $fecha);
  }
}
