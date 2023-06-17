<?php
include_once 'FabricaAbstracta.php';
class FabricaRecetaMedica extends FabricaAbstracta{
    public $recetaMedica;
    public function creaRecetaMedica($citaMedica,$diagnostico,$descripcion){
        $this->recetaMedica = new RecetaMedica($citaMedica,$diagnostico,$descripcion);
    }
    public function getObjeto(){
        return $this->recetaMedica;
    }
    public function creaCitaMedica($doctor,$paciente,$horario,$establecimiento){
        return null;
    }
    
}