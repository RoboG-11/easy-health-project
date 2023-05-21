<?php
class Cuenta {
    public $nombre = string;
    public $apellido = string;
    public $telefono = string;
    public $correo= string;
    public $contraseña = string;
    public $direccion= string;



    public function __construct($nombre,$apellido,$telefono,$correo,$contraseña,$direccion){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;
        $this->correo=$correo;
        $this->contraseña=$contraseña;
        $this->direccion=$direccion;
    }

    public function eliminar(){
    }

    public function modificar(){
    }
}