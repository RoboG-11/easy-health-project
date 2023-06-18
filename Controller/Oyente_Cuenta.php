<?php

if (isset($_POST['func'])) {
  $func = $_POST['func'];
  if ($func == 'IniciarSesion') {
    include '../Model/Gestor_Cuentas.php';
    $correo = $_POST['correo']; // Obtener el valor del campo de correo del formulario
    $contraseña = $_POST['contraseña']; // Obtener el valor del campo de contraseña del formulario
    $gestorCuentas = new GestorCuentas();
    $gestorCuentas->IniciarSesion($correo, $contraseña);
  } elseif ($func == 'Registro') {
    include '../Model/Gestor_Cuentas.php';
    // Obtener los valores de los campos de registro
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $direccion = $_POST['direccion'];
    $ocupación = $_POST['rol'];

    $gestorCuentas = new GestorCuentas();
    // Se registra en la BD tabla de cuentas
    $gestorCuentas->Registro($nombre, $apellido, $telefono, $correo, $contraseña, $direccion, $ocupación);

    // Se registra en la BD tabla doctores o pacientes
    if ($ocupación == 2) {
      // Para doctor

      $xtra = $gestorCuentas->registroDoctor($correo, $contraseña);
    }

    if ($ocupación == 3) {
      // Para paciente
      $xtra = $gestorCuentas->registroPaciente($correo, $contraseña);
    }
  }
}
