<?php

// // include 'Gestor_Carrito.php';
// include '../Model/carrito/Carrito.php';
// include '../Model/carrito/Gestor_Carrito.php';

// $nombre = $_POST['producto'];
// // if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])){
// // 	echo "hola";
// // 	$carrito = new Carrito();
// // 	$gestorCarrito = new Gestor_Carrito($carrito);
// // 	if($_POST['action'] == 'getProductInfo'){
// // 		// echo 'hola';
// // 	}
// // }
// $carrito = new Carrito();
// $gestor = new Gestor_Carrito($carrito);

// $result = $gestor->getInfoProducto($nombre);

// $carrito->agregarProducto($result);
// var_dump($carrito);

include '../Model/carrito/Carrito.php';
include '../Model/carrito/Gestor_Carrito.php';

session_start();

$nombre = $_POST['producto'];

if (isset($_SESSION['carrito'])) {
    $carrito = $_SESSION['carrito'];
} else {
    $carrito = new Carrito();
    $_SESSION['carrito'] = $carrito;
}

$gestor = new Gestor_Carrito($carrito);

$result = $gestor->getInfoProducto($nombre);

$carrito->agregarProducto($result);
// var_dump($carrito);
