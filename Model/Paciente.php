<?php
class Paciente extends Cuenta {
    public $fecha_nacimiento;
    public $enfermedadCronica;
    public $alergia;

    public function __construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion,$fecha_nacimiento,$enfermedadCronica,$alergia){
        parent::__construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion,);
        $this->fecha_nacimiento=$fecha_nacimiento;
        $this->enfermedadCronica=$enfermedadCronica;
        $this->alergia=$alergia;
    }

    public function modificarAlergia(){
    }

    public function modificarPeso(){
    }
}