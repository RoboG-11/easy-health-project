<?php
class Establecimiento {
    public $nombre;
    public $direccion ;
    public $especialidad;


    public function __construct($nombre,$direccion,$especialidad){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->especialidad=$especialidad;
    }

    public function getNombre(){
        return $this->nombre;
    }

}