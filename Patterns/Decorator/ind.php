<?php
include("./Carrito.php");
include("./Decorador_Carrito.php");
include("./Carrito_InfoPago.php");

	$car = new Carrito();
	$decorator = new Carrito_InfoPago($car,"Alfredo Adame", "4443","500.00");
	var_dump($decorator->getProductos());
	var_dump($decorator);


?>