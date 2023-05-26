<?php
class Administrador extends Cuenta{
    public $contraseña;

    public function __construct($nombre,$apellido,$telefono,$correo,$direccion,$contraseña){
        parent::__construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion);
        $this->contraseña=$contraseña;
    }

}