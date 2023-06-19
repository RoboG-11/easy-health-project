<?php
require_once 'Decorador_Carrito.php';

class Carrito_InfoPago extends Decorador_Carrito {
	protected $nombreUsuario;
	protected $formaDePago;
	protected $monto;

	public function __construct($carrito,$nombreUsuario, $formaDePago, $monto){
		parent::__construct($carrito);
		$this->nombreUsuario = $nombreUsuario;
		$this->formaDePago = $formaDePago;
		$this->monto = $monto;
	}

	public function getProductos(){
		return parent::getProductos();
	}
	public function agregarProducto($nombre_Producto){
		array_push(parent::getProductos(), $nombre_Producto);
	}
	public function eliminarProducto($nombre_Producto){
		//
	}

	public function getNombreUsuario(){
		return $this->nombreUsuario;
	}

	public function getMonto(){
		return $this->monto;
	}

	public function getFormaDePago(){
		return $this->formaDePago;
	}
	
}

?>