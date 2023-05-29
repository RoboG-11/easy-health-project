<?php
	require_once('./Carrito.php');
	require_once('./AdaptadorProducto.php');
	require_once('./Cita.php');
	require_once('./Producto.php');

	$carrito = new Carrito();

	$carrito->agregarProducto(new Producto("x-Ray", "340.00"));
	$carrito->agregarProducto(new Producto("Proteina WHEY", "1800.00"));
;
	// var_dump($carrito);

	$productos = $carrito->getProductos();

	$cita = new Cita("Cita23", "Pique", "Shrek Medico", "23-04-23", "10:00-13:00 hrs", "Centro Medico");

	$carrito->agregarProducto(new AdaptadorProducto($cita));

	var_dump($carrito);



?>