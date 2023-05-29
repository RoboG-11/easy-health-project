<?php
	require_once('./Producto.php');
	require_once('./Cita.php');

	class AdaptadorProducto extends Producto {
		
		protected Cita $cita;

		public function __construct($cita){
			$this->cita = $cita;
		}

		public function getCita(){
			return $this->cita;
		}
	}

?>