<?php
include("./Carrito.php");
require_once("./I_Carrito.php");
include("./Decorador_Carrito.php");
include("./Carrito_InfoPago.php");
include("./Compra.php");
include("./Gestor_Carrito.php");

	//se crea un gestor de carrito.
	$gestor = new Gestor_Carrito(new Carrito());


	$result = $gestor->getInfoProducto('Flanax');
	var_dump($result);

	$carrito = $gestor->getCarrito();
	$carrito->agregarProducto($result);
	$carrito->agregarProducto($gestor->getInfoProducto('Ciprofloxacino'));
	$carrito->agregarProducto($gestor->getInfoProducto('Sal de uvas picot Polvo Efervescente'));
	echo "<p>---------------------------------------------<p/>";
	var_dump($carrito->getProductos());

	echo "<p>---------------------------------------------<p/>";
	$carrito->eliminarProducto('Flanax');
	var_dump($carrito->getProductos());
?>