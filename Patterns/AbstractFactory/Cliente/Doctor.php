<?php
include_once 'Cuenta.php';
class Doctor extends Cuenta {
    public $especialidad;
    public $cedulaProfesional;
    public $formacion;

    public function __construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion,$especialidad,$cedulaProfesional,$formacion){
        parent::__construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion);
        $this->especialidad=$especialidad;
        $this->cedulaProfesional=$cedulaProfesional;
        $this->formacion=$formacion;
    }
    

    
}