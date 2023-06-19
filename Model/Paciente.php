<?php
include_once('Cuenta.php');
include_once('../Model/Cuenta.php');

class Paciente extends Cuenta {
    public $sexo;
    public $edad;
    public $peso;
    public $nacionalidad;
    public $fecha_nacimiento;
    public $enfermedadCronica;
    public $alergia;
    public $nss;

    public function __construct($id,$nombre,$apellido,$telefono,$correo,$contraseña,$direccion,$sexo,$edad,$peso,$nacionalidad,$fecha_nacimiento,$enfermedadCronica,$alergia,$nss){
        parent::__construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion,);
        $this->id=$id;
        $this->fecha_nacimiento=$fecha_nacimiento;
        $this->enfermedadCronica=$enfermedadCronica;
        $this->alergia=$alergia;
        $this->sexo=$sexo;
        $this->edad=$edad;
        $this->peso=$peso;
        $this->nacionalidad=$nacionalidad;
        $this->nss=$nss;
    }

    public function modificarAlergia(){
    }

    public function modificarPeso(){
    }
}