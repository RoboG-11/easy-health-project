<?php

include '../Model/Gestor_Cuentas.php';
session_start();

$sexo = $_POST['sexo'];
$especialidad = $_POST['especialidad'];
$cProfesional = $_POST['cedula'];
$formacion = $_POST['formacion'];
$establecimiento = $_POST['establecimiento'];
$nombre = $_SESSION['nombreUsuario'];
$apellido = $_SESSION['apellidoUsuario'];
$telefono = $_SESSION['telefonoUsuario'];

$gestor = new GestorCuentas();
$idCuenta = $gestor->getIdCuenta($nombre, $apellido, $telefono);
$gestor->updateDoctores($idCuenta, $especialidad, $cProfesional, $formacion, $establecimiento, $sexo, $nombre);
?>