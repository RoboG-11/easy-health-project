<?php

use JetBrains\PhpStorm\Pure;

include("../Services/Fabrica/FabricaCitaMedica.php");
include("../Services/Fabrica/FabricaRecetaMedica.php");
include("../Services/Fabrica/RecetaMedica.php");
include("../Services/Fabrica/CitaMedica.php");

include("../Services/Proxys/ProxyInfoCitaMedica.php");
include("Cuenta.php");
include("Doctor.php");
include("Establecimiento.php");
include("Especialidad.php");
include("Horario.php");
include("Fecha.php");
class Gestor_Citas
{
  public $fabritaCitaMedica;
  public $doctor;
  public $paciente;
  public $horario;
  public $establecimiento;
  public $fecha;
  public $citaMedica;

  public function crearFabrica($doctor, $paciente, $horario, $establecimiento, $fecha)
  {
    $this->fabritaCitaMedica = new FabricaCitaMedica();
    $this->fabritaCitaMedica->creaCitaMedica($doctor, $paciente, $horario, $establecimiento);
  }

// Mostrar los nombres de los establecimientos en el formulario
  public function mostrarEstablecimientos()
  {
    $proxy = new ProxyCitaMedica();
    $places = $proxy->getAllPlaces();

    
    foreach ($places as $nombre) {
      echo '<option value="' . $nombre . '">' . $nombre . '</option>';
    }
  }
// Mostrar los nombres de los doctores en el formulario
  public function mostrarDoctores($establecimiento)
  {
    $proxy = new ProxyCitaMedica();
    $idEstablecimiento = $this->obtenerIdEstablecimientoPorNombre($establecimiento);
    $doctores = $proxy->getDoctoresByEstablecimiento($idEstablecimiento);

    foreach ($doctores as $doctor) {
      $nombresDoctores = $proxy->getNombresDoctores($doctor);
      echo '<option value="' . $nombresDoctores . '">' . $nombresDoctores . '</option>';
    }
  }

  public function obtenerIdEstablecimientoPorNombre($nombre)
  {

    $proxy = new ProxyCitaMedica();
    $idEstablecimiento =  $proxy->getIdEstablecimientoByName($nombre);

    return  $idEstablecimiento;
  }

  public function getFecha($fecha){
    $this->fecha=new Fecha($fecha);
  }

  public function getHorario($horario){
    $this->horario=new Horario($horario);
  }

  public function getEstablecimiento($nombre){
    $proxy = new ProxyCitaMedica();
    $result = $proxy->getEstablecimiento($nombre);
    $this->establecimiento = new Establecimiento(
      $result['nombre'],
      $result['Id_Direccion_E'],
      new Especialidad($result['Especialidad']),
      $result['id_Establecimento']
    );
  }

  public function getDoctor($nombre){
    $proxy = new ProxyCitaMedica();
    $result = $proxy->getDoctor($nombre);
    $this->doctor = new Doctor(
      $result['id_doctor'],
      $result['nombre'],
      $result['apellido'],
      $result['telefono'],
      $result['correo'],
      $result['password'],
      $result['id_direccion_c'],
      $result['id_especialidad'],
      $result['c_Profesional'],
      $result['formacion']
    );
  }

  public function setCitaMedica($idCita, $paciente,){
    $proxy = new ProxyCitaMedica();
    $proxy->setCitaMedica($idCita, $this->doctor->id, $paciente, $this->horario->hora, $this->establecimiento->id, $this->fecha->fecha);
  }
}