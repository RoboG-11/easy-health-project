<?php

include '../Model/Gestor_Cuentas.php';
session_start();

$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$fecha = $_POST['fechaNacimiento'];
$nacionalidad = $_POST['nacionalidad'];
$enfermedad = $_POST['enfermedadCronica'];
$alergias = $_POST['alergias'];
$nss = $_POST['nss'];
$nombre = $_SESSION['nombreUsuario'];
$apellido = $_SESSION['apellidoUsuario'];
$telefono = $_SESSION['telefonoUsuario'];


$gestor = new GestorCuentas();
$idCuenta = $gestor->getIdCuenta($nombre, $apellido, $telefono);
$gestor->updatePaciente($idCuenta, $sexo, $edad, $peso, $fecha, $nacionalidad, $enfermedad, $alergias, $nss);