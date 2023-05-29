<?php
	class Producto{
		protected $nombreProducto;
		protected $precio;

		public function __construct($nombreProducto, $precio){
			$this->nombreProducto=$nombreProducto;
			$this->precio=$precio;
		}

		public function getNombreProducto(){
			return $this->nombreProducto;
		}

		public function getPrecio(){
			return $this->precio;
		}

		public function setNombreProducto($nombreProducto){
			$this->nombreProducto=$nombreProducto;
		}

		public function setPrecio($precio){
			$this->precio=$precio;
		}

	}
?>