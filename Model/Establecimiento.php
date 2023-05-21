<?php
class Establecimiento {
    public $nombre=string;
    public $direccion = Direccion;
    public $especialidad=Especialidad;


    public function __construct($nombre,$direccion,$especialidad){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->especialidad=$especialidad;
    }

}