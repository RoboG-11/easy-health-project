<?php
class Emergencia {
    public $paciente = Paciente;
    public $establecimiento = Establecimiento;

    public function __construct($paciente,$establecimiento){
        $this->paciente=$paciente;
        $this->establecimiento=$establecimiento;
    }
    public function Solicitar(){
        
    }

    public function Cancelar(){
        
    }
}