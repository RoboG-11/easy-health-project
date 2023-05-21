<?php
class Clinica extends Establecimiento {
    public function __construct($nombre,$direccion,$especialidad){
        parent::__construct($nombre,$direccion,$especialidad);
    }
}