<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos enviados por el formulario
  $fecha = $_POST['fecha'];
  $horario = $_POST['horario'];
  $establecimiento = $_POST['establecimiento'];
  $doctor = $_POST['doctores'];

  // Realizar las operaciones o procesamiento necesario con los datos capturados

  // Ejemplo: Imprimir los datos capturados
  echo "Fecha: " . $fecha . "<br>";
  echo "Horario: " . $horario . "<br>";
  echo "Establecimiento: " . $establecimiento . "<br>";
  echo "Doctor: " . $doctor . "<br>";
}
