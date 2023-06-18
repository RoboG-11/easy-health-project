<?php

include_once 'conectorBD.php';

class ProxyIdCuenta
{

    private $conector;
    private $idCuenta;
    private $email;
    private $password;

    public function __construct($idCuenta, $email, $password)
    {
        $this->conector = new ConectorBD();
        $this->idCuenta = $idCuenta;
        $this->email = $email;
        $this->password = $password;
    }

    public function registroIDCuentaDoctor()
    {
        $this->conector->registrarIdDoctor($this->email, $this->password, $this->idCuenta, '0');
    }

    public function registroIDCuentaPaciente()
    {
        $this->conector->registrarIdPaciente($this->email, $this->password, $this->idCuenta);
    }
}
