<?php
include_once 'IUsuario.php';

class Usuario
{
  private $nombre;
  private $email;

  public function __construct($nombre, $email)
  {
    $this->nombre = $nombre;
    $this->email = $email;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getUsername()
  {
    return $this->email;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function setUsername($username)
  {
    $this->email = $username;
  }
}
