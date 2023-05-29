<?php

include_once 'proxyCuentaUsuario.php';
include_once 'proxyConsultaInfo.php';
include_once 'proxyModificarInfo.php';

// Datos del usuario a consultar
$email = "brian.rivera@cua.uam.mx";
$password = "12345";

//WARNING: Datos para modificar el email
//$userId = 1; // ID del usuario a modificar
//$newEmail = "prueba@gmail.com"; // Nuevo email a asignar

try {
  // Crear instancia del proxy de cuenta de usuario
  $proxyCuenta = new ProxyCuentaUsuario($email, $password);

  // Verificar si el usuario existe
  if ($proxyCuenta->userExists()) {
    // Crear instancia del proxy de consulta
    $proxyConsulta = new ProxyConsultaInfo($email, $password);

    // Obtener información del usuario
    $nombre = $proxyConsulta->getNombre();
    $username = $proxyConsulta->getUsername();

    echo "Usuario válido" . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Username: " . $username . "<br>";

    //WARNING: Crear instancia del proxy de modificación
    //$proxyModificar = new ProxyModificarInfo($username, $newEmail);
    // // Modificar el email del usuario
    // if ($proxyModificar->modifyEmail()) {
    //   echo "Email modificado exitosamente";
    // } else {
    //   echo "No se pudo modificar el email";
    // }
  } else {
    echo "Usuario no válido";
  }
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}
