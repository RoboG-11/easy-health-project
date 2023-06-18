<?php
	include_once 'conectorBD.php';

	class ProxyProductos{
		private $conector;
		private $producto;
		public function __construct(){
			$this->conector = new ConectorBD();
		}

		public function getInfoProduct($nombreProducto){
				$this->producto = $nombreProducto;
		}
	}

?>