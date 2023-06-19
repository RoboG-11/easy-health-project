<?php
require_once './I_Carrito.php';

class Carrito implements I_Carrito{

	// private $productos = [
	// 	'Penicilina',
	// 	'Amoxixilina', 
	// 	'Pregabalina'
	// ];

	protected $productos;

	public function __construct(){
		$this->productos = [];
	}

	public function getProductos(){
		return $this->productos;
	}
	public function agregarProducto($producto){
		array_push($this->productos, $producto);
	}
	public function eliminarProducto($nombre_Producto){
		$clave = array_search($nombre_Producto, $this->productos, true);
		unset($this->productos[$clave]);
	}

	public function numeroProductos(){
		return count($this->productos);
	}

}