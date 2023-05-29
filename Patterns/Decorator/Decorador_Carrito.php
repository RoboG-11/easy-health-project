<?php
require_once './I_Carrito.php';

class Decorador_Carrito implements I_Carrito {

	private Carrito $carrito;

	public function __construct($car){
		$this->carrito = $car;
	}

	public function getProductos(){
		return $this->carrito->getProductos();
	}
	public function agregarProducto($nombre_Producto){
		array_push($this->carrito->getProductos(), $nombre_Producto);
	}
	public function eliminarProducto($nombre_Producto){
		//
	}
}