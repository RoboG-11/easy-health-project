<?php
class Direccion{
    public $calle ;
    public $numInterior ;
    public $numExterior;
    public $colonia ;
    public $ciudad ;
    public $CP;

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