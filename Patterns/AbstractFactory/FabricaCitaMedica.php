<?php
include_once 'Abstracta.php';
class FabricaCitaMedica extends Abstracta{
    public $citaMedica;
    public function creaCitaMedica($doctor,$paciente,$horario,$establecimiento){
        $this->citaMedica = new CitaMedica($doctor,$paciente,$horario,$establecimiento);
    }
    public function getCitaMedica(){
        return $this->citaMedica;
    }
}
