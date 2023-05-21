<?php
    function IniciarSesión($correo, $contraseña){
        //validamos datos del servidor
        $user = "root";
        $pass = "";
        $host = "localhost";

        //conetamos al base datos
        $connection = mysqli_connect($host, $user, $pass);

        //verificamos la conexion a base datos
        if(!$connection) 
            {
            echo "No se ha podido conectar con el servidor" . mysql_error();
            }
        else
            {

            //indicamos el nombre de la base datos
            $datab = "easyhealth";
            //indicamos selecionar ala base datos
            $db = mysqli_select_db($connection,$datab);

            if (!$db)
            {
                echo "No se ha podido encontrar la Base de datos";
            }
            else
            {
                session_start();
                
                    if($_SERVER["REQUEST_METHOD"] == "POST") {

                        $correo = $_POST["correo"] ;
                        $contraseña = $_POST["contraseña"] ;

                        $sql = "SELECT correo FROM cuentas WHERE correo = '$correo' and contraseña = '$contraseña'";
                        $result = mysqli_query($connection,$sql);
                        $row = mysqli_fetch_array($result);

                        if($row!=mysqli_fetch_array($result)){
                            header("location: ../View/GUI_MenuPaciente.php");
                        } else{
                            echo'<script type="text/javascript">alert("Correo o contraseña incorrectos, intente de nuevo.");
                            window.location.href="../View/GUI_IniciarSesion.php";</script>';
                        }
                }
                exit;

            }
                            
            mysqli_close( $connection);
        }
    }

    function Registro($nombre, $apellido, $telefono, $correo, $contraseña, $direccion, $ocupación){
        //validamos datos del servidor
        $user = "root";
        $pass = "";
        $host = "localhost";

        //conetamos al base datos
        $connection = mysqli_connect($host, $user, $pass);

        //hacemos llamado al imput de formuario
        $nombre = $_POST["nombre"] ;
        $apellido = $_POST["apellido"] ;
        $correo = $_POST["correo"] ;
        $contraseña = $_POST["contraseña"] ;
        $telefono = $_POST["telefono"] ;
        $direccion = $_POST["direccion"] ;
        $rol = $_POST["rol"] ;

        //verificamos la conexion a base datos
        if(!$connection) 
            {
                echo "No se ha podido conectar con el servidor" . mysql_error();
            }
        else
            {

                //indicamos el nombre de la base datos
                $datab = "easyhealth";
                //indicamos selecionar ala base datos
                $db = mysqli_select_db($connection,$datab);

                if (!$db)
                {
                    echo "No se ha podido encontrar la Base de datos";
                }
                else
                {
                    //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
                    $instruccion_SQL = "INSERT INTO cuentas (id_rol, correo, contraseña, nombre, apellido, telefono, direccion)
                                    VALUES ('$rol', '$correo', '$contraseña','$nombre','$apellido', '$telefono', '$direccion')";
                    echo $instruccion_SQL;
                    $resultado = mysqli_query($connection,$instruccion_SQL);

                    header("location: ../View/GUI_MenuPaciente.php");

                    echo "<h3><b>Registro guardado con exito.</b></h3>" ;
                }
                                
                mysqli_close( $connection );
	        }
        }

?>
