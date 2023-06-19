<?php
	include_once 'conectorBD.php';

	class ProxyProductos{
		private $conector;
		public function __construct(){
			$this->conector = new ConectorBD();
		}

		public function getInfoProduct($nombreProducto){
			return $this->conector->getProductInfo($nombreProducto);
		}
	}

?>