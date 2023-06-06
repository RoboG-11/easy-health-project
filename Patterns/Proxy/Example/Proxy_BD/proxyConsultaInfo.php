<?php

include_once 'IUsuario.php';
include_once 'conectorBD.php';

class ProxyConsultaInfo implements IUsuario
{
  private $conector;
  private $email;
  private $password;

  public function __construct($email, $password)
  {
    $this->conector = new ConectorBD();
    $this->email = $email;
    $this->password = $password;
  }

  public function getNombre()
  {
    $userInfo = $this->conector->getUserInfo($this->email, $this->password);
    return $userInfo['nombre'];
  }

  public function getUsername()
  {
    $userInfo = $this->conector->getUserInfo($this->email, $this->password);
    return $userInfo['email'];
  }
}
