<?php
class CitaMedica
{
    public Paciente $Paciente;
    public Establecimiento $Establecimiento;
    public Doctor $Doctor;
    public Horario $Horario;

    public function __construct($Paciente, $Establecimiento, $Doctor, $Horario)
    {
        $this->Paciente = $Paciente;
        $this->Establecimiento = $Establecimiento;
        $this->Doctor = $Doctor;
        $this->Horario = $Horario;
    }
    public function mostrar_CitaMedica()
    {
        //POR IMPLEMENTAR
        echo "DATOS DE LA CITA MEDICA:" . "<br><br>";

        echo "DATOS DEL PACIENTE:" . "<br>";
        echo "NOMBRE: " . $this->Paciente->getNombre() . "<br>";
        echo "APELLIDO: " . $this->Paciente->getApellido() . "<br>";
        echo "TELEFONO: " . $this->Paciente->getTelefono() . "<br>";
        echo "DIRECCION: " . $this->Paciente->getDireccion() . "<br>";
        echo "FECHA DE NACIMIENTO: " . $this->Paciente->getFecha() . "<br><br>";
        
        echo "DATOS DEL ESTABLECIMIENTO:" . "<br>";
        echo "NOMBRE: " . $this->Establecimiento->getNombre() . "<br>";
        echo "DIRECCION: " . $this->Establecimiento->getDireccion() . "<br><br>";

        echo "DATOS DEL DOCTOR:" . "<br>";
        echo "NOMBRE: " . $this->Doctor->getNombre() . "<br>";
        echo "APELLIDO: " . $this->Doctor->getApellido() . "<br>";
        echo "TELEFONO: " . $this->Doctor->getTelefono() . "<br>";
        echo "ESPECIALIDAD: " . $this->Doctor->getEspecialidad() . "<br>";
        echo "CEDULA PROFESIONAL: " . $this->Doctor->getCedulaProfesional() . "<br>";
        echo "FORMACION: " . $this->Doctor->getFormacion() . "<br><br>";

        echo "DATOS DEL HORARIO:" . "<br>";
        echo "HORA: " . $this->Horario->getHora() . "<br>";
        echo "FECHA: " . $this->Horario->getFecha() . "<br>";
    }
    public function set_Paciente($Paciente)
    {
        $this->Paciente = $Paciente;
    }
    public function get_Paciente()
    {
        return $this->Paciente;
    }
    public function set_Establecimiento($Establecimiento)
    {
        $this->Establecimiento = $Establecimiento;
    }
    public function get_Establecimiento()
    {
        return $this->Establecimiento;
    }
    public function set_Doctor($Doctor)
    {
        $this->Doctor = $Doctor;
    }
    public function get_Doctor()
    {
        return $this->Doctor;
    }
    public function set_Horario($Horario)
    {
        $this->Horario = $Horario;
    }
    public function get_Horario()
    {
        return $this->Horario;
    }
}