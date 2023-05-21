<?php
class Direccion{
    public $calle = string;
    public $numInterior = int;
    public $numExterior= string;
    public $colonia = string;
    public $ciudad = string;
    public $CP= int;

    public function __construct($calle,$numInterior,$numExterior,$colonia,$ciudad,$CP){
        $this->calle=$calle;
        $this->numInterior=$numInterior;
        $this->numExterior=$numExterior;
        $this->colonia=$colonia;
        $this->ciudad=$ciudad;
        $this->CP=$CP;

    }
    public function getMonto(){
    }

    public function eliminaMedicamento($medicamento){
        
    }
}