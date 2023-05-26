<?php
class Pago {
    public $fecha;
    public $monto;
    public $descripcion;


    public function __construct($fecha,$monto,$descripcion){
        $this->fecha=$fecha;
        $this->descripcion=$descripcion;
        $this->monto=$monto;
    }

}