<?php
	interface I_Carrito{
		public function getProductos();
		public function agregarProducto($nombre_Producto);
		public function eliminarProducto($nombre_Producto);
	}
?>