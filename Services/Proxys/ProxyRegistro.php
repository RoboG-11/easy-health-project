<?php

//include_once 'IUsuario.php';
include_once 'conectorBD.php';


class ProxyRegistro
{
    private $conector;
    //private $idCuenta;
    private $rol;
    private $correo;
    private $password;
    private $nombre;
    private $apellido;
    private $telefono;
    private $idDireccion;

    public function __construct($rol, $correo, $password, $nombre, $apellido, $telefono, $idDireccion)
    {
        $this->conector = new ConectorBD();
        //$this->idCuenta = $idCuenta;
        $this->rol = $rol;
        $this->correo = $correo;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->idDireccion = $idDireccion;
    }

    public function register()
    {
        return $this->conector->register($this->nombre, $this->apellido, $this->telefono, $this->correo,
        $this->password, $this->idDireccion, $this->rol);
    }
}
