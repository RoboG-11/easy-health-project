<?php
class Administrador extends Cuenta{
    public $contraseña=string;

    public function __construct($nombre,$apellido,$tel,$edad,$direccion,$contraseña){
        parent::__construct($nombre,$apellido,$tel,$edad,$direccion);
        $this->especialidad=$especialidad;
        $this->cedulaProfesional=$cedulaProfesional;
        $this->formacion=$formacion;
    }

}