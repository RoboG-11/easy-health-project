<?php
include_once 'FabricaAbstracta.php';
class FabricaCitaMedica extends FabricaAbstracta
{
  public $citaMedica;
  public $randomId;
  public function creaCitaMedica($doctor, $paciente, $horario, $establecimiento, $fecha)
  {
    $this->randomId = rand(1000, 9999);
    $this->citaMedica = new CitaMedica($this->randomId, $doctor, $paciente, $horario, $establecimiento, $fecha);
  }
  public function getObjeto()
  {
    return $this->citaMedica;
  }
  public function creaRecetaMedica($citaMedica, $diagnostico, $descripcion)
  {
    return null;
  }
}
