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
include("Paciente.php");

class Gestor_Citas
{
  public $fabritaCitaMedica;
  public $doctorObjeto;
  public $pacienteObjeto;
  public $horarioObjeto;
  public $establecimientoObjeto;
  public $fechaObjeto;
  public $citaMedica;

  public function __construct()
  {
    $this->fabritaCitaMedica = new FabricaCitaMedica();
  }

  public function wholePart($doctor, $paciente, $horario, $establecimiento, $fecha)
  {
    $this->fechaObjeto = $this->getFecha($fecha);
    $this->horarioObjeto = $this->getHorario($horario);
    $this->pacienteObjeto = $this->getPaciente($paciente);
    $this->establecimientoObjeto = $this->getEstablecimiento($establecimiento);
    $this->doctorObjeto = $this->getDoctor($doctor);
  }

  public function crearCita($doctor, $paciente, $horario, $establecimiento, $fecha)
  {
    //
    $this->wholePart($doctor, $paciente, $horario, $establecimiento, $fecha);
    $this->fabritaCitaMedica->creaCitaMedica(
      $this->doctorObjeto,
      $this->pacienteObjeto,
      $this->horarioObjeto,
      $this->establecimientoObjeto,
      $this->fechaObjeto
    );
    $this->citaMedica = $this->fabritaCitaMedica->getObjeto();
    //$this->citaMedica->visualizaCitaMedica();
    $this->setCitaMedica();
    header("location: ../View/GUI_Citas.php");
  }



  //Obtiene el objeto fecha a partir de la fecha
  public function getFecha($fecha)
  {
    return new Fecha($fecha);
  }
  //Obtiene el objeto horario a partir del horario
  public function getHorario($horario)
  {
    return new Horario($horario);
  }

  //Obtiene el objeto establecimiento a partir de su nombre
  public function getEstablecimiento($nombre)
  {
    $proxy = new ProxyCitaMedica();
    $result = $proxy->getEstablecimiento($nombre);
    return new Establecimiento(
      $result['nombre'],
      $result['Id_Direccion_E'],
      new Especialidad($result['Especialidad']),
      $result['id_Establecimento']
    );
  }
  //Obtiene el objeto paciente a partir de su nombre
  public function getPaciente($nombre)
  {
    $proxy = new ProxyCitaMedica();

    $result = $proxy->getPaciente($nombre);
    return new Paciente(
      $result['id_cuenta'],
      $result['nombre'],
      $result['apellido'],
      $result['telefono'],
      $result['correo'],
      $result['password'],
      $result['id_direccion_c'],
      $result['sexo'],
      $result['edad'],
      $result['peso'],
      $result['nacionalidad'],
      $result['fecha_nacimiento'],
      $result['enfermedad_cronica'],
      $result['alergias'],
      $result['nss']
    );
  }

  //Obtiene el objeto doctor a partir de su nombre
  public function getDoctor($nombre)
  {
    $proxy = new ProxyCitaMedica();
    $result = $proxy->getDoctor($nombre);
    return new Doctor(
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
    // echo $this->doctor->id;
    // echo $this->doctor->nombre;
    // echo $this->doctor->apellido;
    // echo $this->doctor->telefono;
    // echo $this->doctor->correo;
    // echo $this->doctor->contraseña;
    // echo $this->doctor->formacion;
  }
  public function setCitaMedica()
  {
    $proxy = new ProxyCitaMedica();
    $proxy->setCitaMedica(
      $this->citaMedica->getID(),
      $this->doctorObjeto->id,
      $this->pacienteObjeto->getID(),
      $this->horarioObjeto->hora,
      $this->establecimientoObjeto->id,
      $this->fechaObjeto->fecha
    );
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
  public function mostrarCitas($nombreUsuario)
  {
    $proxy = new ProxyCitaMedica();
    $citasMedicas = $proxy->getAllCitas($nombreUsuario);

    foreach ($citasMedicas as $citaMedica) {
      $idCita = $citaMedica['Id_Cita'];
      $idPaciente = $citaMedica['Id_Paciente'];
      $idDoctor = $citaMedica['Id_Doctor'];
      $fecha = $citaMedica['Fecha'];
      $horario = $citaMedica['Horario'];
      $idDireccionE = $citaMedica['Id_Direccion_E'];
      $nombreDoctor = $citaMedica['NombreDoctor'];
      $nombreEstablecimiento = $citaMedica['NombreEstablecimiento'];

      echo "ID Cita: $idCita<br>";
      echo "ID Paciente: $idPaciente<br>";
      echo "ID Doctor: $idDoctor<br>";
      echo "Fecha: $fecha<br>";
      echo "Horario: $horario<br>";
      echo "ID Dirección E: $idDireccionE<br>";
      echo "Doctor: $nombreDoctor<br>";
      echo "Establecimiento: $nombreEstablecimiento<br>";
      echo "<br>";
    }
  }


  public function obtenerIdEstablecimientoPorNombre($nombre)
  {

    $proxy = new ProxyCitaMedica();
    $idEstablecimiento =  $proxy->getIdEstablecimientoByName($nombre);

    return  $idEstablecimiento;
  }
}
