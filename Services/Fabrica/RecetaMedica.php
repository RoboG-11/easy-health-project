<?php
include_once 'RecetaAbstracta.php';
include_once '../Model/Medicamento.php';
class RecetaMedica extends RecetaAbstracta{
    public CitaMedica $citaMedica;
    public Medicamento $medicamento;
    public $diagnostico ;
    public $descripcion;
    
    public function __construct($citaMedica,$diagnostico,$descripcion){
        $this->citaMedica=$citaMedica;
        $this->diagnostico=$diagnostico;
        $this->descripcion=$descripcion;
        
    }

    public function visualizaRecetaMedica(){
        echo "<br><br>DATOS DE RECETA MEDICA:" . "<br>";
        echo "DOCTOR: " . $this->citaMedica->doctor->getNombre() . "<br>";
        echo "PACIENTE: " . $this->citaMedica->paciente->getNombre() . "<br>";
        echo "DIAGNOSTICO: " . $this->diagnostico . "<br>";
        echo "DESCRIPCION: " . $this->descripcion . "<br>";
        if($this->medicamento==NULL){
            echo "NO HAY MEDICAMENTOS <br>";
        }else{
            echo "MEDICAMENTO: " . $this->medicamento->getNombre() . "<br>";
        }
    }
    
    public function setRecetaMedica(){

    }
    public function añadirMedicamento($medicamento){
        $this->medicamento=$medicamento;
    }
}