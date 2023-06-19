<?php
class Doctor extends Cuenta {
    public $id;
    public $especialidad;
    public $cedulaProfesional;
    public $formacion;

    public function __construct($id,$nombre,$apellido,$telefono,$correo,$contraseña,$direccion,$especialidad,$cedulaProfesional,$formacion){
        parent::__construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion);
        $this->id=$id;
        $this->especialidad=$especialidad;
        $this->cedulaProfesional=$cedulaProfesional;
        $this->formacion=$formacion;
    }
}