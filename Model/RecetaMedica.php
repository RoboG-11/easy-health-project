<?php
class RecetaMedica {
    public $fecha = string;
    public $paciente = Paciente;
    public $doctor = Doctor;
    public $medicamento = Medicamento;
    
    public function __construct($fecha,$paciente,$doctor,$medicamento){
        $this->fecha=$fecha;
        $this->paciente=$paciente;
        $this->doctor=$doctor;
        $this->medicamento=$medicamento;
    }
    
}