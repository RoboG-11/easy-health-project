<?php
class Establecimiento {
    public $nombre;
    public $direccion ;
    public Especialidad $especialidad;


    public function __construct($nombre,$direccion,$especialidad){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->especialidad=$especialidad;
    }

}