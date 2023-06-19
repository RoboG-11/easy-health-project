<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  include '../Model/Gestor_Citas.php';
  // Obtener los datos enviados por el formulario
  $fecha = $_POST['fecha'];
  $horario = $_POST['horario'];
  $establecimiento = $_POST['establecimiento'];
  $doctor = $_POST['doctores'];
  $words = explode(" ", $doctor);
  $doctor = $words[0];

  $gestorCitas = new Gestor_Citas();
  $gestorCitas->getDoctor($doctor);
  $gestorCitas->getEstablecimiento($establecimiento);
  
  $gestorCitas->getFecha($fecha);
  $gestorCitas->getHorario($horario);
  $gestorCitas->setCitaMedica(4,21,432,'15:30:00',312,'2023-05-21');
  



  //$gestorCitas->crearFabrica($doctor,$paciente,$horario,$establecimiento,$fecha);

  // Realizar las operaciones o procesamiento necesario con los datos capturados

  // Ejemplo: Imprimir los datos capturados
  echo "Fecha: " . $fecha . "<br>";
  echo "Horario: " . $horario . "<br>";
  echo "Establecimiento: " . $establecimiento . "<br>";
  echo "Doctor: " . $doctor . "<br>";
}
