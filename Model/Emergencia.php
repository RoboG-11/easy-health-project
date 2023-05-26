<?php
class Emergencia {
    public Paciente $paciente;
    public Establecimiento $establecimiento;

    public function __construct($paciente,$establecimiento){
        $this->paciente=$paciente;
        $this->establecimiento=$establecimiento;
    }
    public function Solicitar(){
        
    }

    public function Cancelar(){
        
    }
}