<?php
	class Persona
	{
		var $nombre;
		var $apellido;
		var $edad;
		var $dni;
		function persona($sujetoNombre,$sujetoApellido,$sujetoEdad){
			$this->nombre = $sujetoNombre;
			$this->apellido = $sujetoApellido;
			$this->edad = $sujetoEdad;
		}
		function presentarse(){
			echo "Hola soy " . $this->nombre . " " . $this->apellido . " " . $this->edad . "<br />";
		}
		function insertar($tabla){
			$consulta = "INSERT INTO $tabla VALUES ($nombre,$apellido)";
		}
	}
	class Paciente extends Persona
	{
		var $sintoma;
		function presentarse(){
			echo "Hola soy " . $this->nombre . " " . $this->apellido . " " . $this->edad . " y tengo " . $this->sintoma . "<br />";
		}
	}
	class Administrador extends Persona
	{
		var $cargo;
		function presentarse(){
			echo "Hola soy " . $this->nombre . " " . $this->apellido . " " . $this->edad . " y soy " . $this->cargo . "<br />";
		}
	}

?>