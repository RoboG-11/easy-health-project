<?php

include_once 'conectorBD.php';
include_once 'IUbicacion.php';

class APIubicacion implements IUbicacion
{
  private $conectorBD;

  public function __construct()
  {
    $this->conectorBD = new ConectorBD();
  }

  public function getAll()
  {
    $ubicaciones = array();
    $ubicaciones["items"] = array();

    try {
      $connection = $this->conectorBD->connect();

      if ($connection !== null) {
        $query = $connection->prepare('SELECT * FROM ubicacion');
        $query->execute();

        if ($query->rowCount() > 0) {
          while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $item = array(
              'id' => $row['id'],
              'nombre' => $row['nombre'],
              'ubicacion' => $row['ubicacion']
            );

            array_push($ubicaciones['items'], $item);
          }

          echo json_encode($ubicaciones);
        } else {
          echo json_encode(array("mensaje" => "No hay elementos registrados"));
        }
      } else {
        echo json_encode(array("mensaje" => "Error de conexión a la base de datos"));
      }
    } catch (PDOException $e) {
      echo json_encode(array("mensaje" => "Error en la consulta: " . $e->getMessage()));
    }
  }
}
