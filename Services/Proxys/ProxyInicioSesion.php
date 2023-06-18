<?php

include_once 'conectorBD.php';

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
        return $this->conector->getUserName($this->email, $this->password);
    }

    public function getApellido()
    {
        return $this->conector->getUserLastName($this->email, $this->password);
    }

    public function getCorreo()
    {
        return $this->conector->getEmail($this->email, $this->password);
    }

    public function getTelefono()
    {
        return $this->conector->getPhone($this->email, $this->password);
    }

    public function getDirecion()
    {
        return $this->conector->getAddress($this->email, $this->password);
    }

    public function getUsername()
    {
        $userInfo = $this->conector->getUserInfo($this->email);
        return $userInfo['correo'];
    }

    public function getIdCuenta()
    {
        $idCuenta = $this->conector->getIdCuenta($this->email, $this->password);
        return $idCuenta;
    }
}
