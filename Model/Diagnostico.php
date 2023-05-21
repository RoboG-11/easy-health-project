<?php
class Diagnostico {
    public $doctor= Doctor;
    public $paciente= Paciente;
    public $fecha= string;
    public $descripcion= string;

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