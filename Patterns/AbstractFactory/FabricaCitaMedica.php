<?php
include_once 'FabricaAbstracta.php';
class FabricaCitaMedica extends FabricaAbstracta{
    public $citaMedica;
    public function creaCitaMedica($doctor,$paciente,$horario,$establecimiento){
        $this->citaMedica = new CitaMedica($doctor,$paciente,$horario,$establecimiento);
    }
    public function getObjeto(){
        return $this->citaMedica;
    }
    public function creaRecetaMedica($citaMedica,$diagnostico,$descripcion){
        return null;
    }
}
