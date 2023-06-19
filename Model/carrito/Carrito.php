<?php
require_once 'I_Carrito.php';

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
		header("location: ../View/GUI_Carrito.php");
		// foreach ($this->productos as $producto) {
		// 	print_r($producto);
		// }
		// print_r($this->productos);
	}
	public function eliminarProducto($nombre_Producto){
		$clave = array_search($nombre_Producto, $this->productos, true);
		unset($this->productos[$clave]);
	}

	public function crearProducto($nombre_producto, $precio){
		return new Producto($nombre_producto, $precio);
	}

	public function numeroProductos(){
		return count($this->productos);
	}

}