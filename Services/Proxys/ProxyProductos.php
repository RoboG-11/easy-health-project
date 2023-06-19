<?php
include_once 'conectorBD.php';

class ProxyProductos
{
  private $conector;
  public function __construct()
  {
    $this->conector = new ConectorBD();
  }

  public function getInfoProduct($nombreProducto)
  {
    return $this->conector->getProductInfo($nombreProducto);
  }

  public function crearCarrito($idUsuario)
  {
    $this->conector->crearCarrito($idUsuario);
  }

  public function insertarProducto($idUsuraio, $idMedicamento,$categoria, $nombre, $precio, $principioActivo, $descripcion){
    $this->conector->insertIntoCarrito($idUsuraio, $idMedicamento,$categoria, $nombre, $precio, $principioActivo, $descripcion);
  }

  public function getIdUsuario($nombre, $apellido, $correo, $telefono, $direccion){
    return $this->conector->getIdUsuario($nombre, $apellido, $correo, $telefono, $direccion);
  }

  public function showAllMedicamentos($idUsuario){
    return $this->conector->showAllMedicamentos($idUsuario);
  }
}
