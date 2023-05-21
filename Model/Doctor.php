<?php
class Doctor extends Cuenta {
    public $especialidad= string;
    public $cedulaProfesional= string;
    public $formacion= string;

    public function __construct($nombre,$apellido,$tel,$edad,$direccion,$especialidad,$cedulaProfesional,$formacion){
        parent::__construct($nombre,$apellido,$tel,$edad,$direccion);
        $this->especialidad=$especialidad;
        $this->cedulaProfesional=$cedulaProfesional;
        $this->formacion=$formacion;
    }
}