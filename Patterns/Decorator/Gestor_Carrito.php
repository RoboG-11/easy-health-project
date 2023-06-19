<?php
require_once('./Carrito_InfoPago.php');

class Gestor_Carrito{

	private I_Carrito $carrito;
	private $conector;

	public function __construct($carrito){
		//creates a new Gestor Carrito object
		$this->carrito=$carrito;
		$this->conector=new ConectorBD();
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