<?php
class Farmacia {
    public Medicamento $medicamento;
    
    public function __construct($medicamento){
        $this->medicamento=$medicamento;
    }
    
}