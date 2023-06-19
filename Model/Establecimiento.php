<?php
class Establecimiento {
    public $nombre;
    public $direccion ;
    public Especialidad $especialidad;
    public $id;


    public function __construct($nombre,$direccion,$especialidad,$id){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->especialidad=$especialidad;
        $this->id=$id;
    }

}