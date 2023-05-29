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
	public function agregarProducto($nombre_Producto){
		array_push($this->productos, $nombre_Producto);
	}
	public function eliminarProducto($nombre_Producto){
	}

}