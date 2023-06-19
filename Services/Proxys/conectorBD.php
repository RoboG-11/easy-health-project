<?php

class ConectorBD
{
  private $host;
  private $db;
  private $user;
  private $password;
  private $charset;

  public function __construct()
  {
    $this->host = 'localhost:3306';
    $this->db = 'easyhealth';
    $this->user = 'root';
    $this->password = "";
    $this->charset = 'utf8mb4';
  }

  public function connect()
  {
    try {
      $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
      ];
      $pdo = new PDO($connection, $this->user, $this->password, $options);

      return $pdo;
    } catch (PDOException $e) {
      print_r('Error connection: ' . $e->getMessage());
    }
  }

  public function userExists($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT * FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        return true;
      } else {
        return false;
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getUserName($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT nombre FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['nombre'];
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getUserLastName($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT nombre, apellido FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['apellido'];
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getEmail($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT correo FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['correo'];
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getAddress($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT Id_Direccion_C FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['Id_Direccion_C'];
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getIdCuenta($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT Id_Cuenta FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['Id_Cuenta'];
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getIdRol($idCuenta)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare("SELECT Id_Rol FROM cuentas WHERE Id_Cuenta = :idCuenta");
      $query->execute(['idCuenta' => $idCuenta]);

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['Id_Rol'];
      } else {
        return false; // La cuenta no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function registrarIdDoctor($email, $password, $idCuenta, $idEstablecimiento)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT Id_Cuenta FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        // Insertar ID en la columna Id_Doctor de la tabla doctores
        $insertQuery = $connection->prepare("INSERT INTO doctores (Id_Doctor, id_establecimiento) VALUES (:idCuenta, :idEstablecimiento)");
        $insertQuery->execute(['idCuenta' => $idCuenta, 'idEstablecimiento' => $idEstablecimiento]);

        return $idCuenta;
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }


  public function registrarIdPaciente($email, $password, $idCuenta)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT Id_Cuenta FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        // Insertar ID en la columna id_cuenta de la tabla pacientes
        $insertQuery = $connection->prepare("INSERT INTO pacientes (id_cuenta) VALUES (:idCuenta)");
        $insertQuery->execute(['idCuenta' => $idCuenta]);

        return $idCuenta;
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getIdPlace($nombre)
  {
    if (is_array($nombre)) {
      $nombre = implode(", ", $nombre);
    }

    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare("SELECT Id_Establecimento FROM establecimientos WHERE Nombre = :nombre");
      $query->execute(['nombre' => $nombre]);

      $result = $query->fetch(PDO::FETCH_ASSOC);

      if ($result) {
        return $result['Id_Establecimento'];
      } else {
        return false; // El establecimiento no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getRolCuenta($nombre, $telefono)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare("SELECT Id_Rol FROM cuentas WHERE Nombre = :nombre AND Telefono = :telefono");
      $query->execute(['nombre' => $nombre, 'telefono' => $telefono]);

      $result = $query->fetch(PDO::FETCH_ASSOC);

      if ($result) {
        return $result['Id_Rol'];
      } else {
        return false; // La cuenta no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getDoctors()
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getAllPlaces()
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("SELECT * FROM establecimientos WHERE Id_Establecimento != 0");
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_ASSOC);
      //return $results;
      print_r($results);
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function showAllPlaces()
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("SELECT * FROM establecimientos WHERE Id_Establecimento != 0");
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_ASSOC);

      $nombresEstablecimientos = array();
      foreach ($results as $row) {
        $nombresEstablecimientos[] = $row['Nombre'];
      }

      return $nombresEstablecimientos;
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getCuentaDoctorByNombre($nombreCuenta)
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("SELECT c.nombre, c.apellido, c.telefono, c.correo, c.password, c.id_direccion_c, 
                                      d.id_doctor,d.id_especialidad, d.c_Profesional, d.formacion 
                                      FROM cuentas c
                                      JOIN doctores d ON c.id_cuenta = d.id_doctor
                                      WHERE c.nombre = :nombreCuenta");
      $query->bindParam(':nombreCuenta', $nombreCuenta);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_ASSOC);

      return $result;
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }
  public function getCuentaPacienteByNombre($nombreCuenta)
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("SELECT c.nombre, c.apellido, c.telefono, c.correo, c.password, c.id_direccion_c, 
                                      d.id_cuenta ,d.sexo, d.edad, d.peso,d.fecha_nacimiento,d.nacionalidad,d.enfermedad_cronica,
                                      d.alergias,d.nss
                                      FROM cuentas c
                                      JOIN pacientes d ON c.id_cuenta = d.id_cuenta
                                      WHERE c.nombre = :nombreCuenta");
      $query->bindParam(':nombreCuenta', $nombreCuenta);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_ASSOC);
      return $result;
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getEstablecimientoByName($nombreEstablecimiento)
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("SELECT nombre, Id_Direccion_E, Especialidad, id_Establecimento
                                      FROM establecimientos
                                      WHERE nombre = :nombreE");
      $query->bindParam(':nombreE', $nombreEstablecimiento);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_ASSOC);

      return $result;
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getIdCuentaUsuario($nombre, $apellido, $telefono)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare("SELECT Id_Cuenta FROM cuentas WHERE Nombre = :nombre AND Apellido = :apellido AND Telefono = :telefono");
      $query->bindParam(':nombre', $nombre);
      $query->bindParam(':apellido', $apellido);
      $query->bindParam(':telefono', $telefono);
      $query->execute();

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['Id_Cuenta'];
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function updatePaciente($idCuenta, $sexo, $edad, $peso, $fechaNacimiento, $nacionalidad, $enfermedadCronica, $alergias, $nss)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare("UPDATE pacientes
                                   SET Sexo = :sexo, Edad = :edad, Peso = :peso, Fecha_Nacimiento = :fechaNacimiento,
                                       Nacionalidad = :nacionalidad, Enfermedad_Cronica = :enfermedadCronica,
                                       Alergias = :alergias, NSS = :nss
                                   WHERE id_cuenta = :idCuenta");
      $query->bindParam(':sexo', $sexo);
      $query->bindParam(':edad', $edad);
      $query->bindParam(':peso', $peso);
      $query->bindParam(':fechaNacimiento', $fechaNacimiento);
      $query->bindParam(':nacionalidad', $nacionalidad);
      $query->bindParam(':enfermedadCronica', $enfermedadCronica);
      $query->bindParam(':alergias', $alergias);
      $query->bindParam(':nss', $nss);
      $query->bindParam(':idCuenta', $idCuenta);
      $query->execute();
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function getIdEstablecimiento($nombreEstablecimiento)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare("SELECT id_Establecimiento FROM establecimientos WHERE Nombre = :nombreEstablecimiento");
      $query->bindParam(':nombreEstablecimiento', $nombreEstablecimiento);
      $query->execute();

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['id_Establecimiento'];
      } else {
        return false; // El establecimiento no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }


  public function updateDoctor($idDoctor, $idEspecialidad, $cProfesional, $formacion, $idEstablecimiento, $sexo)

  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare("UPDATE doctores
                                 SET Id_especialidad = :idEspecialidad, c_profesional = :cProfesional,
                                     formacion = :formacion, id_establecimiento = :idEstablecimiento,
                                     sexo = :sexo
                                 WHERE ID_doctor = :idDoctor");
      $query->bindParam(':idEspecialidad', $idEspecialidad);
      $query->bindParam(':cProfesional', $cProfesional);
      $query->bindParam(':formacion', $formacion);
      $query->bindParam(':idEstablecimiento', $idEstablecimiento);
      $query->bindParam(':sexo', $sexo);
      $query->bindParam(':idDoctor', $idDoctor);
      $query->execute();
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }


  public function showDoctoresByEstablecimiento($establecimiento)
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("SELECT Id_Doctor FROM doctores WHERE id_establecimiento = :establecimiento");
      $query->bindParam(':establecimiento', $establecimiento);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_ASSOC);

      $idDoctores = array();
      foreach ($results as $row) {
        $idDoctores[] = $row['Id_Doctor'];
      }

      return $idDoctores;
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function showNameDoctor($id)
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("SELECT Nombre, Apellido FROM cuentas WHERE Id_Cuenta = :idCuenta");
      $query->bindParam(':idCuenta', $id);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_ASSOC);

      if ($result) {
        $nombre = $result['Nombre'];
        $apellido = $result['Apellido'];
        return $nombre . ' ' . $apellido;
      } else {
        return false; // La cuenta no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }


  public function getPhone($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT telefono FROM cuentas WHERE correo = :user AND password = :pass");
      $query->execute(['user' => $email, 'pass' => $md5pass]);

      if ($query->rowCount()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['telefono'];
      } else {
        return false; // El usuario no existe
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }


  public function register($nombre, $apellido, $telefono, $correo, $password, $direccion, $rol)
  {

    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("INSERT INTO cuentas (Id_Rol, correo, password, nombre, apellido, 
      telefono, Id_Direccion_C) VALUES ('$rol', '$correo', '$md5pass', '$nombre', '$apellido', '$telefono',
      '$direccion')");

      if ($query->execute()) {
        return true;
      } else {
        return false;
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  public function setCitamedica($idCita, $doctor, $paciente, $horario, $establecimiento, $fecha)
  {
    $connection = $this->connect();
    if ($connection !== NULL) {
      $query = $connection->prepare("INSERT INTO citas (Id_Cita, Id_Doctor, Id_Paciente, Horario, Id_Direccion_E, Fecha)
                                        VALUES (:idCita, :doctor, :paciente, :horario, :establecimiento, :fecha)");
      $query->bindParam(':idCita', $idCita);
      $query->bindParam(':doctor', $doctor);
      $query->bindParam(':paciente', $paciente);
      $query->bindParam(':horario', $horario);
      $query->bindParam(':establecimiento', $establecimiento);
      $query->bindParam(':fecha', $fecha);
      $query->execute();
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }



  /************************************************************/
  public function getUserInfo($email)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare('SELECT * FROM cuentas WHERE email = :user');
      $query->execute(['user' => $email]);

      $userInfo = $query->fetch(PDO::FETCH_ASSOC); // Obtener el resultado como arreglo asociativo

      if ($userInfo) {
        return $userInfo;
      } else {
        throw new Exception("Usuario no encontrado");
      }
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }


  public function modifyEmail($email, $newEmail)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare('UPDATE usuario SET email = :newEmail WHERE email = :email');
      $query->execute(['newEmail' => $newEmail, 'email' => $email]);

      return $query->rowCount() > 0;
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }

  //saul
  public function getProductInfo($nameProduct){
    $connection = $this->connect();
    if ($connection !== null) {
      $query = $connection->prepare('SELECT * FROM medicamentos WHERE nombre = :product');
      $query->execute(['product' => $nameProduct]);
      return $query->fetch(PDO::FETCH_ASSOC);
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }
}
