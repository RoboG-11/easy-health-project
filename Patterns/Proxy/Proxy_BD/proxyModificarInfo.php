<?php

include_once 'IUsuario.php';
include_once 'conectorBD.php';

class ProxyModificarInfo 
{
  private $conector;
  private $email;
  private $newEmail;

  public function __construct($email, $newEmail)
  {
    $this->conector = new ConectorBD();
    $this->email = $email;
    $this->newEmail = $newEmail;
  }

  public function modifyEmail()
  {
    return $this->conector->modifyEmail($this->email, $this->newEmail);
  }
}
