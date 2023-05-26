<?php
class Paciente
{
    public $nombre;
    public $apellido;
    public $telefono;
    public $direccion;
    public $fecha_nacimiento;

    
    public function __construct($nombre, $apellido, $telefono, $direccion, $fecha_nacimiento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }
    public function getFecha()
    {
        return $this->fecha_nacimiento;
    }
    public function setFecha($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        return $this;
    }
}