<?php

include_once '../Model/Paciente.php';
include_once '../Services/Proxys/ProxyInicioSesion.php';
include_once '../Services/Proxys/ProxyRegistro.php';
include_once '../Services/Proxys/ProxyIdCuenta.php';
include_once '../Services/Proxys/ProxyRol.php';
include_once '../Services/Proxys/ProxyInfoCitaMedica.php';

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

  public function registroDoctor($correo, $contraseña)
  {

    $proxyGetId = new ProxyInicioSesion($correo, $contraseña);
    $idCuenta = $proxyGetId->getIdCuenta();

    $proxyRegistroID = new ProxyIdCuenta($idCuenta, $correo, $contraseña);
    $proxyRegistroID->registroIDCuentaDoctor();
  }

  public function registroPaciente($correo, $contraseña)
  {

    $proxyGetId = new ProxyInicioSesion($correo, $contraseña);
    $idCuenta = $proxyGetId->getIdCuenta();

    $proxyRegistroID = new ProxyIdCuenta($idCuenta, $correo, $contraseña);
    $proxyRegistroID->registroIDCuentaPaciente();

    //echo $idCuenta;
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

  public function rolCuenta($nombre, $telefono)
  {
    $proxyRol = new ProxyRol($nombre, $telefono);
    $rolCuenta = $proxyRol->rolUsuario();

    return $rolCuenta;
  }

  public function getIdCuenta($nombre, $apellido, $telefono){
    $proxy = new ProxyCitaMedica($nombre, $apellido, $telefono);
    $idCuenta = $proxy->getIdCuenta($nombre, $apellido, $telefono);

    return $idCuenta;
  }

  public function updatePaciente($idCuenta, $sexo, $edad, $peso, $fechaNacimiento, $nacionalidad, $enfermedadCronica, $alergias, $nss){
    $proxy = new ProxyCitaMedica($idCuenta, $sexo, $edad, $peso, $fechaNacimiento, $nacionalidad, $enfermedadCronica, $alergias, $nss);
    $proxy->updatePaciente($idCuenta, $sexo, $edad, $peso, $fechaNacimiento, $nacionalidad, $enfermedadCronica, $alergias, $nss);
  }

public function updateDoctores($idCuenta, $especialidad, $cedula, $formacion, $establecimiento, $sexo, $nombre){
  $proxy = new ProxyCitaMedica();
  $idEstablecimiento = $proxy->getIdEstablecimientoByName($establecimiento);
  $proxy->updateDoctor($idCuenta, $especialidad, $cedula, $formacion, $idEstablecimiento, $sexo);
}


}
