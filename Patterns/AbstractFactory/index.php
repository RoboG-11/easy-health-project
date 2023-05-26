<?php
include("FabricaCitaMedica.php");

include("CitaMedica.php");
include("Paciente.php");
include("Doctor.php");
include("Horario.php");
include("Establecimiento.php");
$paciente = new Paciente("Jorge","Infante","423321","jinfante2212@","fasfas","asdasd","sadsa","dasdas","sulfas");
$doctor = new Doctor("Karina","Infante","423321","jinfante2212@","fasfas","asdasd","sadsa","dasdas","sulfas");
$horario = new Horario("10:00");
$establecimiento = new Establecimiento("Hospital","CALZ DESIERTO","faf");

$fabritaCitaMedica = new FabricaCitaMedica();
$fabritaCitaMedica->creaCitaMedica($doctor,$paciente,$horario,$establecimiento);
$citamedica=$fabritaCitaMedica->getCitaMedica();
$citamedica->visualizaCitaMedica();