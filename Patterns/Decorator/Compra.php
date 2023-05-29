<?php
require_once './Decorador_Carrito.php';

class Compra extends Decorador_Carrito{
	
	private $idPago;
	private $fechaPago;

	public function __construct($carrito_InfoPago, $idPago, $fechaPago){
		parent ::__construct($carrito_InfoPago);
		$this->idPago = $idPago;
		$this->fechaPago = $fechaPago;
	}

	public function getProductos(){
		return parent::getProductos();
	}

	public function getIdPago(){
		return $this->idPago;
	}

	public function getFechaPago(){
		return $this->fechaPago;
	}

	public function setIdPago($idPago){
		$this->idPago = $idPago;
	}

	public function setFechaPago($fechaPago){
		$this->fechaPago=$fechaPago;
	}

	public function agregarProducto($nombre_Producto){
		// array_push(parent::getProductos(), $nombre_Producto);
	}
	public function eliminarProducto($nombre_Producto){
		//
	}

}

?>