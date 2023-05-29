<?php
require_once './Decorador_Carrito.php';

class Compra extends Decorador_Carrito{
	
	protected $idPago;
	protected $fechaPago;
	protected $carritoInfoPago;

	public function __construct(Carrito_InfoPAgo $carritoInfoPago, $idPago, $fechaPago){
		parent ::__construct($carritoInfoPago);
		$this->carritoInfoPago = $carritoInfoPago;
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
		// deactivated
	}
	public function eliminarProducto($nombre_Producto){
		// deactivated
	}

	public function getCarrito(){
		return $this->carritoInfoPago;
	}
}

?>