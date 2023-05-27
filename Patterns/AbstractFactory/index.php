<?php
include("FabricaCitaMedica.php");
include("FabricaRecetaMedica.php");
include("RecetaMedica.php");
include("CitaMedica.php");
include("Paciente.php");
include("Medicamento.php");
include("Doctor.php");
include("Horario.php");
include("Establecimiento.php");
$paciente = new Paciente("Jorge","Infante","423321","jinfante2212@","fasfas","asdasd","sadsa","dasdas","sulfas");
$doctor = new Doctor("Karina","Infante","423321","jinfante2212@","fasfas","asdasd","sadsa","dasdas","sulfas");
$horario = new Horario("10:00");
$establecimiento = new Establecimiento("Hospital","CALZ DESIERTO","faf");

$fabritaCitaMedica = new FabricaCitaMedica();
$fabritaCitaMedica->creaCitaMedica($doctor,$paciente,$horario,$establecimiento);
$citaMedica=$fabritaCitaMedica->getObjeto();
$citaMedica->visualizaCitaMedica();

$fabritaRecetaMedica = new FabricaRecetaMedica();
$fabritaRecetaMedica->creaRecetaMedica($citaMedica,"Cancer","Cancer muy fuerte");
$recetaMedica=$fabritaRecetaMedica->getObjeto();
$medicamento = new Medicamento("Aspirina","Mañana","Quita dolor de cabeza");
$recetaMedica->añadirMedicamento($medicamento);
$recetaMedica->visualizaRecetaMedica();