<?php
abstract class FabricaAbstracta{
    abstract protected function creaCitaMedica($doctor, $paciente, $horario, $establecimiento, $fecha);
    abstract protected function creaRecetaMedica($citaMedica,$diagnostico,$descripcion);
    abstract protected function getObjeto();

}