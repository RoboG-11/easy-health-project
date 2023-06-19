<?php

include '../Model/carrito/Gestor_Carrito.php';
include '../Model/carrito/Carrito.php';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])){
	$carrito = new Carrito();
	$gestorCarrito = new Gestor_Carrito($carrito);
	if($_POST['action'] == 'getProductInfo'){
		
	}
}