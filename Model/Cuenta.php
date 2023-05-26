<?php
class Cuenta {
    public $nombre;
    public $apellido;
    public $telefono;
    public $correo;
    public $contraseña;
    public $direccion;



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