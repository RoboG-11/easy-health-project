<?php
class CitaMedica {
    public Doctor $doctor;
    public Paciente $paciente ;
    public Horario $horario;

    public function __construct($doctor,$paciente,$horario){
        $this->doctor=$doctor;
        $this->paciente=$paciente;
        $this->horario=$horario;
    }
}