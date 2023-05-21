<?php
class CitaMedica {
    public $doctor=Doctor;
    public $paciente = Paciente;
    public $horario = Horario;

    public function __construct($doctor,$paciente,$horario){
        $this->doctor=$doctor;
        $this->paciente=$paciente;
        $this->horario=$horario;
    }
}