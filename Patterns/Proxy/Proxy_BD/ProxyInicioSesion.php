<?php

//include_once 'IUsuario.php';
include_once 'conectorBD.php';

echo "Estoy en el Proxy";

class ProxyInicioSesion
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

    public function userExists()
    {
        return $this->conector->userExists($this->email, $this->password);
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