<?php
class CitaMedica {
    public $doctor=Doctor;
    public $paciente = Paciente;
    public $establecimiento = Establecimiento;
    public $horario = Horario;

    public function __construct($doctor,$paciente,$horario, $establecimiento){
        $this->doctor=$doctor;
        $this->paciente=$paciente;
        $this->horario=$horario;
    }
}