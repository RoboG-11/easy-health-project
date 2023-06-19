<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  include '../Model/Gestor_Citas.php';
  // Obtener los datos enviados por el formulario
  $fecha = $_POST['fecha'];
  $horario = $_POST['horario'];
  $establecimiento = $_POST['establecimiento'];
  $doctor = $_POST['doctores'];

  $nombreUsuario = isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : '';
  $words = explode(" ", $doctor);
  $doctor = $words[0];
  $gestorCitas = new Gestor_Citas();
  $gestorCitas->crearCita($doctor, $nombreUsuario, $horario, $establecimiento, $fecha); 
}else{
  include '../Model/Gestor_Citas.php';

}
