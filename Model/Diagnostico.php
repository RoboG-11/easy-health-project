<?php
class Diagnostico {
    public Doctor $doctor;
    public Paciente $paciente;
    public $fecha;
    public $descripcion;

    public function __construct($doctor,$paciente,$fecha,$descripcion){
        $this->doctor=$doctor;
        $this->paciente=$paciente;
        $this->fecha=$fecha;
        $this->descripcion=$descripcion;
    }

    public function generarDiagnostico(){
        
    }

    public function modificarDiagnostico(){
        
    }

    public function eliminarDiagnostico(){
        
    }

}