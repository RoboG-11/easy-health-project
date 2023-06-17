<?php
	include './Producto.php';

	class Carrito{
		private $productos = array(NULL);

		public function __construct()
		{
			$productos = array(
				new Producto("Paracetamol","300.00"),
				new Producto("Aspirina", "350.00")
			);
		}

		public function getProductos(){
			return $this->productos;
		}
		public function agregarProducto(Producto $producto){
			array_push($this->productos, $producto);
		}
		public function eliminarProducto($producto){
		}

	}

?>