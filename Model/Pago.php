<?php
class Pago {
    public $fecha=string;
    public $monto = int;
    public $descripcion=string;


    public function __construct($fecha,$monto,$descripcion){
        $this->fecha=$fecha;
        $this->direccion=$direccion;
        $this->monto=$monto;
    }

}