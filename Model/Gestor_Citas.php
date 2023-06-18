<?php
include("../Services/Fabrica/FabricaCitaMedica.php");
include("../Services/Fabrica/FabricaRecetaMedica.php");
include("../Services/Fabrica/RecetaMedica.php");
include("../Services/Fabrica/CitaMedica.php");

include("../Services/Proxys/ProxyInfoCitaMedica.php");
class Gestor_Citas
{
  public $fabritaCitaMedica;
  public function crearFabrica($doctor, $paciente, $horario, $establecimiento, $fecha)
  {
    $this->fabritaCitaMedica = new FabricaCitaMedica();
    $this->fabritaCitaMedica->creaCitaMedica($doctor, $paciente, $horario, $establecimiento);
    echo "Fecha: $fecha<br>";
    echo "Horario: $horario<br>";
    echo "Doctor seleccionado: $doctor<br>";
    echo "Establecimiento seleccionado: $establecimiento";
    echo "Paciente seleccionado: $paciente";
  }

  public function mostrarEstablecimientos()
  {
    $proxy = new ProxyCitaMedica();
    $places = $proxy->getAllPlaces();

    // Mostrar los nombres de los establecimientos en el formulario
    foreach ($places as $nombre) {
      echo '<option value="' . $nombre . '">' . $nombre . '</option>';
    }
  }

  public function mostrarDoctores($establecimiento)
  {
    $proxy = new ProxyCitaMedica();
    $idEstablecimiento = $this->obtenerIdEstablecimientPorNombre($establecimiento);
    $doctores = $proxy->getDoctoresByEstablecimiento($idEstablecimiento);

    foreach ($doctores as $doctor) {
      echo '<option value="' . $doctor . '">' . $doctor . '</option>';
    }

  }

  public function obtenerIdEstablecimientPorNombre($nombre)
  {

    $proxy = new ProxyCitaMedica();
    $idEstablecimiento =  $proxy->getIdEstablecimientoByName($nombre);

    return  $idEstablecimiento;
  }
}

// $fabritaCitaMedica->creaCitaMedica($doctor,$paciente,$horario,$establecimiento);
// $citaMedica=$fabritaCitaMedica->getObjeto();
// $citaMedica->visualizaCitaMedica();

// $fabritaRecetaMedica = new FabricaRecetaMedica();
// $fabritaRecetaMedica->creaRecetaMedica($citaMedica,"Cancer","Cancer muy fuerte");
// $recetaMedica=$fabritaRecetaMedica->getObjeto();
// $medicamento = new Medicamento("Aspirina","Mañana","Quita dolor de cabeza");
// $recetaMedica->añadirMedicamento($medicamento);
// $recetaMedica->visualizaRecetaMedica();