<?php
class RecetaMedica {
    public $fecha ;
    public Paciente $paciente;
    public Doctor $doctor ;
    public Medicamento $medicamento;
    
    public function __construct($fecha,$paciente,$doctor,$medicamento){
        $this->fecha=$fecha;
        $this->paciente=$paciente;
        $this->doctor=$doctor;
        $this->medicamento=$medicamento;
    }
    
}