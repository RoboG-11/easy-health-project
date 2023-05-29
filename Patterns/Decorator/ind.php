<?php
include("./Carrito.php");
require_once("./I_Carrito.php");
include("./Decorador_Carrito.php");
include("./Carrito_InfoPago.php");
include("./Compra.php");
include("./Gestor_Carrito.php");

	//se crea un gestor de carrito.
	$gestor = new Gestor_Carrito(new Carrito());

	//creamos el primer decorador de carrito.
	echo '<h1> ------ Imprimiendo Carrito ---- </h1>';
	$decorator1=$gestor->crearCarrito_Info_Pago("Alfredo Adame", "Linea de captura", "450");
	$products = $decorator1->getProductos();
	echo "<h3 style=''>Productos en carrito: </h3>";
	foreach( $products as $product)  {
		echo "<p>producto : {$product}</p>";
	}

	echo '<h1> ------ Mostrando datos pago para comprar carrito ---- </h1>';
		echo "<h3>Productos: </h3>";
		foreach( $decorator1->getProductos() as $product)  {
			echo "<p>producto : {$product}</p>";
		}
		echo "<h3>Información de usuario y pago: </h3>";
			echo "<p>Nombre del cliente: {$decorator1->getNombreUsuario()}</p>";
			echo "<p>Forma de pago: {$decorator1->getFormaDePago()}</p>";
			echo "<p>Total o monto a pagar: $ {$decorator1->getMonto()}.00</p>";

	
	//creamos nuestro segundo decoradr
	echo '<h1> ------ Imprimiendo datos de la compra ---- </h1>';
		$decorator2 = $gestor->crearCompra($decorator1, "333-3333-333//ticket", '23 de abril de 2022');
		echo "<h3>Productos: </h3>";
		foreach( $decorator2->getProductos() as $product)  {
			echo "<p>producto : {$product}</p>";
		}
		$copyDecorator1 = $decorator2->getCarrito();
		echo "<h3>Información de usuario y pago: </h3>";
			echo "<p>Nombre del cliente: {$copyDecorator1->getNombreUsuario()}</p>";
			echo "<p>Forma de pago: {$copyDecorator1->getFormaDePago()}</p>";
			echo "<p>Total o monto a pagar: $ {$copyDecorator1->getMonto()}.00</p>";
		echo "<h3>Datos de la compra: </h3>";
			echo "<p>Número de pago: {$decorator2->getIdPago()}</p>";
			echo "<p>fecha de compra: {$decorator2->getFechaPago()}</p>";

?>