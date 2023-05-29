<?php
include_once 'CitaAbstracta.php';
class CitaMedica extends CitaAbstracta{
    public Doctor $doctor;
    public Paciente $paciente ;
    public Horario $horario;
    public Establecimiento $establecimiento;

    public function __construct($doctor,$paciente,$horario,$establecimiento){
        $this->doctor=$doctor;
        $this->paciente=$paciente;
        $this->horario=$horario;
        $this->establecimiento=$establecimiento;
    }
    public function visualizaCitaMedica(){
        echo "<br><br>DATOS DE CITA MEDICA:" . "<br>";
        echo "DOCTOR: " . $this->doctor->getNombre() . "<br>";
        echo "PACIENTE: " . $this->paciente->getNombre() . "<br>";
        echo "HORARIO: " . $this->horario->getHora() . "<br>";
        echo "ESTABLECIMIENTO: " . $this->establecimiento->getNombre() . "<br>";
    }
    
    public function setCitaMedica(){

    }
}