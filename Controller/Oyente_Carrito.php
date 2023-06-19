<?php

include '../Model/carrito/Carrito.php';
include '../Model/carrito/Gestor_Carrito.php';

session_start();
$nombreUsuario = isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : '';
$apellidoUsuario = isset($_SESSION['apellidoUsuario']) ? $_SESSION['apellidoUsuario'] : '';
$correoUsuario = isset($_SESSION['correoUsuario']) ? $_SESSION['correoUsuario'] : '';
$telefonoUsuario = isset($_SESSION['telefonoUsuario']) ? $_SESSION['telefonoUsuario'] : '';
$direccionUsuario = isset($_SESSION['direccionUsuario']) ? $_SESSION['direccionUsuario'] : '';

$producto = isset($_POST['producto']) ? $_POST['producto'] : '';

if (isset($_SESSION['carrito'])) {
    $carrito = $_SESSION['carrito'];
} else {
    $carrito = new Carrito();
    $_SESSION['carrito'] = $carrito;
}

$gestor = new Gestor_Carrito($carrito);

$result = $gestor->getInfoProducto($producto);

/*extract($result);

//$gestor = new Gestor_Carrito($carrito);

$idUsuario = $gestor->getIdUsuario($nombreUsuario, $apellidoUsuario, $correoUsuario, $telefonoUsuario, $direccionUsuario);
$gestor->insertarProducto($idUsuario, $Id_Medicamento, $Categoria, $producto, $Precio, $Principio_Activo, $Descripcion);
*/

if (is_array($result)) {
    extract($result);
    //$gestor = new Gestor_Carrito($carrito);

    $idUsuario = $gestor->getIdUsuario($nombreUsuario, $apellidoUsuario, $correoUsuario, $telefonoUsuario, $direccionUsuario);
    $gestor->insertarProducto($idUsuario, $Id_Medicamento, $Categoria, $producto, $Precio, $Principio_Activo, $Descripcion);

    // Resto del código
} else {
    // Manejar el caso en el que $result no es un array
    // Puedes mostrar un mensaje de error, redirigir a otra página, o tomar alguna otra acción adecuada.
    echo "ERROR";
}
