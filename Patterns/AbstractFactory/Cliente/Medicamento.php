<?php
class Medicamento{
    private $nombre;
    private $caducidad;
    private $descripcion;
    public function __construct($nombre,$caducidad,$descripcion){
        $this->nombre=$nombre;
        $this->caducidad=$caducidad;
        $this->descripcion=$descripcion;
    }
    public function getNombre(){
        return $this->nombre;
    }
}