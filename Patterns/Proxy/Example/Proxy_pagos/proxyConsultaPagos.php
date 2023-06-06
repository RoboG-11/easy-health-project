<?php
include_once 'IPago.php';

class ProxyConsultaPagos implements IPago
{
  private $realAPI;

  public function getAll()
  {
    if ($this->realAPI === null) {
      $this->realAPI = new APIpagos();
    }

    return $this->realAPI->getAll();
  }
}

