<?php
require_once './I_Carrito.php';

class Carrito implements I_Carrito{

	private $productos = [
		'Penicilina',
		'Amoxixilina', 
		'Pregabalina'
	];

	public function __construct(){
		
	}

	public function getProductos(){
		return $this->productos;
	}
	public function agregarProducto($producto){
		array_push($this->productos, $producto);
	}
	public function eliminarProducto($nombre_Producto){
		unset($productos[$nombre_Producto]);
	}

	public function numeroProductos(){
		return count($this->productos);
	}

}