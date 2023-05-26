<?php
class Doctor
{
    public $nombre;
    public $apellido;
    public $telefono;
    public $especialidad;
    public $cedulaProfesional;
    public $formacion;

    
    public function __construct($nombre, $apellido, $telefono, $especialidad, $cedulaProfesional, $formacion)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->especialidad = $especialidad;
        $this->cedulaProfesional = $cedulaProfesional;
        $this->formacion = $formacion;
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
    public function getEspecialidad()
    {
        return $this->especialidad;
    }
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
        return $this;
    }
    public function getCedulaProfesional()
    {
        return $this->cedulaProfesional;
    }
    public function setCedulaProfesional($cedulaProfesional)
    {
        $this->cedulaProfesional = $cedulaProfesional;
        return $this;
    }
    public function getFormacion()
    {
        return $this->formacion;
    }
    public function setFormacion($formacion)
    {
        $this->formacion = $formacion;
        return $this;
    }
}