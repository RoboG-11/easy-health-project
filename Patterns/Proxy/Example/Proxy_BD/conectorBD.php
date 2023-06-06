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
    $this->host = 'localhost:3307';
    $this->db = 'proxy';
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

  public function getUserInfo($email)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $query = $connection->prepare('SELECT * FROM usuario WHERE email = :user');
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

  public function userExists($email, $password)
  {
    $connection = $this->connect();

    if ($connection !== null) {
      $md5pass = md5($password);

      $query = $connection->prepare("SELECT * FROM usuario WHERE email = :user AND password = :pass");
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
}
