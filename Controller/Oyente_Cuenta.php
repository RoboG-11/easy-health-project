<?php
    if (isset($_POST['func'])) {
        $func = $_POST['func'];
        if($func=='IniciarSesion'){
            include '../Model/Gestor_Cuentas.php';
            IniciarSesión($correo, $contraseña);
        }
        elseif($func=='Registro'){
            include '../Model/Gestor_Cuentas.php';
            Registro($nombre, $apellido, $telefono, $correo, $contraseña, $direccion, $ocupación);
        }
    }

?>