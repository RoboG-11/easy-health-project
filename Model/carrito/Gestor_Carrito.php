<?php
require_once('Carrito_InfoPago.php');
require_once('../Services/Proxys/ProxyProductos.php');

class Gestor_Carrito
{

	    private $carrito;
    private $proxyCarrito;

    public function __construct($carrito)
    {
        $this->carrito = $carrito;
        $this->proxyCarrito = new ProxyProductos();
    }

    public function getInfoProducto($nameProduct)
    {
        return $this->proxyCarrito->getInfoProduct($nameProduct);
    }

	public function getCarrito()
	{
		return $this->carrito;
	}

	public function crearCarrito_Info_Pago($nombreUsuario, $formaDePago, $monto)
	{
		$decorator = new Carrito_InfoPago($this->carrito, $nombreUsuario, $formaDePago, $monto);
		return $decorator;
	}

	public function insertarProducto($idUsuraio, $idMedicamento, $categoria, $nombre, $precio, $principioActivo, $descripcion)
	{

		$proxy = new ProxyProductos();
		$proxy->insertarProducto($idUsuraio, $idMedicamento, $categoria, $nombre, $precio, $principioActivo, $descripcion);

		header("location: ../View/GUI_Carrito.php");
	}

	public function crearCompra($carritoInfoPago, $idPago, $fechaPago)
	{
		$decorator = new Compra($carritoInfoPago, $idPago, $fechaPago);
		return $decorator;
	}

	public function getIdUsuario($nombre, $apellido, $correo, $telefono, $direccion)
	{
		$proxy = new ProxyProductos();
		$id = $proxy->getIdUsuario($nombre, $apellido, $correo, $telefono, $direccion);
		return $id;
	}

	public function showAllMedicamentos($idUsuraio){

		$proxy = new ProxyProductos();
		$medicamentos = $proxy->showAllMedicamentos($idUsuraio);

		return $medicamentos;
	}
}
