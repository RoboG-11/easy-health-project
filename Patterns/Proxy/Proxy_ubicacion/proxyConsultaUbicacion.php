<?php

include_once 'IUbicacion.php';

class ProxyConsultaUbicacion implements IUbicacion
{
  private $realAPI;

  public function getAll()
  {
    if ($this->realAPI === null) {
      $this->realAPI = new APIubicacion();
    }

    return $this->realAPI->getAll();
  }
}

