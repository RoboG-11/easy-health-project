<?php
include '../Model/Gestor_Citas.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $gestorCitas = new Gestor_Citas();

    if ($_POST['action'] === 'getEstablecimientos') {
        echo $gestorCitas->mostrarEstablecimientos();
    } elseif ($_POST['action'] === 'getDoctores' && isset($_POST['establecimiento'])) {
        $gestorCitas->mostrarDoctores($_POST['establecimiento']);
    }
}