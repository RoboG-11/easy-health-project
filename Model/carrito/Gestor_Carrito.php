<?php
require_once('./Carrito_InfoPago.php');
require_once('../../Services/Proxys/ProxyProductos.php');

class Gestor_Carrito{

	private I_Carrito $carrito;
	private $proxyCarrito;

	public function __construct($carrito){
		//creates a new Gestor Carrito object
		$this->carrito=$carrito;
		$this->proxyCarrito=new ProxyProductos();
	}

	public function getInfoProducto($nameProduct){
		return $this->proxyCarrito->getInfoProduct($nameProduct);
	}

	public function getCarrito(){
		return $this->carrito;
	}

	public function crearCarrito_Info_Pago($nombreUsuario, $formaDePago, $monto){
		$decorator = new Carrito_InfoPago($this->carrito,$nombreUsuario, $formaDePago, $monto);
		return $decorator;
	}

	public function crearCompra($carritoInfoPago, $idPago, $fechaPago){
		$decorator = new Compra($carritoInfoPago, $idPago, $fechaPago);
		return $decorator;
	}

}