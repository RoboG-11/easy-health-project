<?php
include_once 'CitaAbstracta.php';
class CitaMedica extends CitaAbstracta
{
  public $idCita;
  public Doctor $doctor;
  public Paciente $paciente;
  public Horario $horario;
  public Establecimiento $establecimiento;
  public Fecha $fecha;

  public function __construct($idCita, $doctor, $paciente, $horario, $establecimiento, $fecha)
  {
    $this->idCita=$idCita;
    $this->doctor = $doctor;
    $this->paciente = $paciente;
    $this->horario = $horario;
    $this->establecimiento = $establecimiento;
    $this->fecha = $fecha;
  }
  public function visualizaCitaMedica()
  {
    echo "<br><br>DATOS DE CITA MEDICA:" . "<br>";
    echo "DOCTOR: " . $this->doctor->getNombre() . "<br>";
    echo "PACIENTE: " . $this->paciente->getNombre() . "<br>";
    echo "HORARIO: " . $this->horario->getHora() . "<br>";
    echo "ESTABLECIMIENTO: " . $this->establecimiento->getNombre() . "<br>";
  }

  public function setCitaMedica()
  {
  }
}
