<?php

include_once 'conectorBD.php';

class ProxyRol{
    private $conector;
    private $nombre;
    private $telefono;

    public function __construct($nombre, $telefono)
    {
        $this->conector = new ConectorBD();
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    public function rolUsuario(){
        return $this->conector->getRolCuenta($this->nombre, $this->telefono);
    }
}