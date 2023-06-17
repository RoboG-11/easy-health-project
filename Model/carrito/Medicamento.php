<?php
    class Medicamento extends Producto {

        protected $categoria;
        protected $principioActivo;

        public function __construct($nombreProducto, $precio, $categoria, $principioActivo){
            parent::__construct($nombreProducto, $precio);
            $this->categoria = $categoria;
            $this->principioActivo = $principioActivo;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function getPrincipioActivo(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function setPrincipioActivo($principioActivo){
            $this->principioActivo = $principioActivo;
        }
        
    }
?>