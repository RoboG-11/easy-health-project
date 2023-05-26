<?php
class Horario
{
    public $hora;
    public $fecha;

    public function __construct($hora, $fecha)
    {
        $this->hora = $hora;
        $this->fecha = $fecha;
    }
    public function setHora($hora)
    {
        $this->hora = $hora;
        return $this;
    }
    public function getHora()
    {
        return $this->hora;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }
}