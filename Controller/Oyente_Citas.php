<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Obtener los datos enviados por el formulario
// include '../Model/Gestor_Citas.php';
// $paciente ="Jorge";
// $fecha = $_POST['fecha'];
// $horario = $_POST['horario'];
// $doctor = $_POST['doctor'];
// $establecimiento = $_POST['establecimiento'];
// $gestorCitas = new Gestor_Citas();
// $gestorCitas->crearFabrica($doctor,$paciente,$horario,$establecimiento,$fecha);


// $gestorCuentas->IniciarSesion($correo, $contraseña);

// Imprimir los datos recibidos
// echo "Fecha: $fecha<br>";
// echo "Horario: $horario<br>";
// echo "Doctor seleccionado: $doctor<br>";
// echo "Establecimiento seleccionado: $establecimiento";
//}

include '../Model/Gestor_Citas.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $gestorCitas = new Gestor_Citas();

    if ($_POST['action'] === 'getEstablecimientos') {
        echo $gestorCitas->mostrarEstablecimientos();
    } elseif ($_POST['action'] === 'getDoctores' && isset($_POST['establecimiento'])) {
        $gestorCitas->mostrarDoctores($_POST['establecimiento']);
    }
}