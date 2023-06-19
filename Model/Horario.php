<?php
class Horario
{
  public $hora;
  public function __construct($hora)
  {
    $this->hora = $hora;
  }
  public function getHora()
  {
    return $this->hora;
  }
}
