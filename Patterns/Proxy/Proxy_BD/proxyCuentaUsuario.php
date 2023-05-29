<?php

include_once 'IUsuario.php';
include_once 'conectorBD.php';

class ProxyCuentaUsuario
{
  private $conectorBD;
  private $email;
  private $password;

  public function __construct($email, $password)
  {
    $this->conectorBD = new ConectorBD();
    $this->email = $email;
    $this->password = $password;
  }

  public function userExists()
  {
    return $this->conectorBD->userExists($this->email, $this->password);
  }
}
