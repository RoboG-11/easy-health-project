<?php
class Paciente extends Cuenta {
    public $fecha_nacimiento= string;
    public $enfermedadCronica= string;
    public $alergia= string;

    public function __construct($nombre,$apellido,$tel,$edad,$direccion){
        parent::__construct($nombre,$apellido,$tel,$edad,$direccion);
        $this->fecha_nacimiento=$fecha_nacimiento;
        $this->enfermedadCronica=$enfermedadCronica;
        $this->alergia=$alergia;
    }

    public function modificarAlergia(){
    }

    public function modificarPeso(){
    }
}