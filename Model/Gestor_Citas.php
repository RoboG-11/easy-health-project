<?php
include("../Services/FabricaCitaMedica.php");
include("../Services/FabricaRecetaMedica.php");
include("../Services/RecetaMedica.php");
include("../Services//CitaMedica.php");

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