<?php
include_once 'IPago.php';
include_once 'conectorBD.php';

class APIpagos implements IPago
{
  private $conectorBD;

  public function __construct()
  {
    $this->conectorBD = new ConectorBD();
  }

  public function getAll()
  {
    $pagos = array();
    $pagos["items"] = array();

    $resultado = $this->obtenerPagos();

    if ($resultado->rowCount() > 0) {
      while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $item = array(
          'id' => $row['id'],
          'motivo' => $row['motivo'],
          'cantidad' => $row['cantidad']
        );

        array_push($pagos['items'], $item);
      }

      echo json_encode($pagos);
    } else {
      echo json_encode(array("mensaje" => "No hay elementos registrados"));
    }
  }

  private function obtenerPagos()
  {
    $connection = $this->conectorBD->connect();

    if ($connection !== null) {
      $query = $connection->prepare('SELECT * FROM pagos');
      $query->execute();

      return $query;
    } else {
      throw new Exception("Error de conexión a la base de datos");
    }
  }
}

