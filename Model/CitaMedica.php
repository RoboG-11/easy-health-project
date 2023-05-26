<?php
class CitaMedica {
    public Doctor $doctor;
    public Paciente $paciente ;
    public Horario $horario;
    public Establecimiento $establecimiento;

    public function __construct($doctor,$paciente,$horario, $establecimiento){
        $this->doctor=$doctor;
        $this->paciente=$paciente;
        $this->horario=$horario;
    }
}