<?php

include_once '../Model/Paciente.php';
include_once '../Patterns/Proxy/Proxy_BD/ProxyInicioSesion.php';
include_once '../Patterns/Proxy/Proxy_BD/ProxyRegistro.php';

class GestorCuentas
{

  public function IniciarSesion($correo, $contraseña)
  {

    $proxyInicioSesion = new ProxyInicioSesion($correo, $contraseña);

    if ($proxyInicioSesion->userExists()) {
      header("location: ../View/GUI_Principal.php");
      /*echo $proxyInicioSesion->getNombre();
      echo $proxyInicioSesion->getApellido();
      echo $proxyInicioSesion->getCorreo();
      echo $proxyInicioSesion->getDirecion();
      echo $proxyInicioSesion->getTelefono();*/


      session_start();
      include_once '../Model/Gestor_Cuentas.php';
      $nombreUsuario = $proxyInicioSesion->getNombre();
      $apellidoUsuario = $proxyInicioSesion->getApellido();
      $correoUsuario = $proxyInicioSesion->getCorreo();
      $telefonoUsuario = $proxyInicioSesion->getTelefono();
      $direccionUsuario = $proxyInicioSesion->getDirecion();

      $_SESSION['nombreUsuario'] = $nombreUsuario;
      $_SESSION['apellidoUsuario'] = $apellidoUsuario;
      $_SESSION['correoUsuario'] = $correoUsuario;
      $_SESSION['telefonoUsuario'] = $telefonoUsuario;
      $_SESSION['direccionUsuario'] = $direccionUsuario;
    } else {
      echo '<script type="text/javascript">alert("Correo o contraseña incorrectos, intente de nuevo.");
                        window.location.href="../View/GUI_IniciarSesion.php";</script>';
    }
  }

  public function Registro($nombre, $apellido, $telefono, $correo, $contraseña, $direccion, $rol)
  {

    $proxyRegistro = new ProxyRegistro($rol, $correo, $contraseña, $nombre, $apellido, $telefono, $direccion);

    if ($proxyRegistro->register()) {
      header("location: ../View/GUI_IniciarSesion.php");
    } else {
      echo '<script type="text/javascript">alert("Correo o contraseña incorrectos, intente de nuevo.");
                        window.location.href="../View/GUI_Registro.php";</script>';
    }

    //if($proxyBD->userExists()) 
  }

  /* Función para darle valor a la sesión actual */
  public function setCurrentUser($correo)
  {
    $_SESSION['correo'] = $correo;
  }

  public function getCurrentUser()
  {
    return $_SESSION['correo'];
  }

  public function closeSession()
  {
    session_unset();
    session_destroy();
  }
}
