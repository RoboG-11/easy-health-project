<?php
class Farmacia {
    public $medicamento = Medicamento;
    
    public function __construct($medicamento){
        $this->medicamento=$medicamento;
    }
    
}