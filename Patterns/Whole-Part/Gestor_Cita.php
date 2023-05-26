<?php
include("CitaMedica.php");
include("Paciente.php");
include("Establecimiento.php");
include("Doctor.php");
include("Horario.php");

$Paciente = new Paciente("Karina", "Alcantara", "5613573588", "Vasco de Quiroga No. 000", "02-10-2002");
$Establecimiento = new Establecimiento("Hospital Medico ABC", "Vasco de Quiroga No. 100");
$Doctor = new Doctor("Jorge", "Infante", "7221751697", "Cardiologia", "2203025452", "Medico Cirujano");
$Horario = new Horario("12:30", "30-05-2023");
$CitaMedica = new CitaMedica($Paciente, $Establecimiento, $Doctor, $Horario);
$CitaMedica->mostrar_CitaMedica();