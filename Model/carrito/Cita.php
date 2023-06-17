<?php

	class Cita{

		private $idCita;
		private $idPaciente;
		private $idDoctor;
		private $fecha;
		private $horario;
		private $idDireccion;

		public function __construct($idCita, $idPaciente, $idDoctor, $fecha, $horario, $idDireccion){
			$this->idCita = $idCita;
			$this->idPaciente = $idPaciente;
			$this->idDoctor = $idDoctor;
			$this->fecha = $fecha;
			$this->horario = $horario;
			$this->idDireccion = $idDireccion;
		}

		public function getIdCita(){
			return $this->idCita;
		}

		public function getIdPaciente(){
			return $this->idPaciente;
		}

		public function getIdDoctor(){
			return $this->idDoctor;
		}

		public function getFecha(){
			return $this->fecha;
		}

		public function getHorario(){
			return $this->horario;
		}

		public function getIdDirecciom(){
			return $this->idDireccion;
		}

	}


?>
