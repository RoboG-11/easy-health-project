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
  }

  public function getDoctoresByEstablecimiento($establecimiento)
  {
    return $this->conector->showDoctoresByEstablecimiento($establecimiento);
  }

  public function getAllPlaces()
  {
    return $this->conector->showAllPlaces();
  }
  public function getAllCitas($nombreUsuario)
  {
    return $this->conector->showAllCitas($nombreUsuario);
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

  public function getPaciente($nombre){
    return $this->conector->getCuentaPacienteByNombre($nombre);
  }

  public function getEstablecimiento($nombre){
    return $this->conector->getEstablecimientoByName($nombre);
  }

  public function setCitaMedica($idCita, $doctor, $paciente, $horario, $establecimiento, $fecha){
    return $this->conector->setCitaMedica($idCita, $doctor, $paciente, $horario, $establecimiento, $fecha);
  }

  public function getIdCuenta($nombre, $apellido, $telefono) {
    return  $this->conector->getIdCuentaUsuario($nombre, $apellido, $telefono); 
  }

  public function updatePaciente($idCuenta, $sexo, $edad, $peso, $fechaNacimiento, $nacionalidad, $enfermedadCronica, $alergias, $nss){
    $this->conector->updatePaciente($idCuenta, $sexo, $edad, $peso, $fechaNacimiento, $nacionalidad, $enfermedadCronica, $alergias, $nss);    
  }

  public function updateDoctor($idDoctor, $idEspecialidad, $cProfesional, $formacion, $idEstablecimiento, $sexo){
    $this->conector->updateDoctor($idDoctor, $idEspecialidad, $cProfesional, $formacion, $idEstablecimiento, $sexo);
  }

  public function getIdEstablecimiento($nombre){
      return $this->getIdEstablecimiento($nombre);
  }

}
