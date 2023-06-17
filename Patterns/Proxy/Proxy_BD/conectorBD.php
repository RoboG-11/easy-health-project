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
    $this->host = 'localhost:3308';
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
}
