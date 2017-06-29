<?php

class Autor{

	private $id;
	private $nombre;
	private $nacionalidad;
	private $fechaNacimiento;


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getNacionalidad(){
		return $this->nacionalidad;
	}

	public function setNacionalidad($nacionalidad)
	{
		$this->nacionalidad = $nacionalidad;
	}

	public function getfechaNacimiento(){
		return $this-> fechaNacimiento;
	}

	public function setfechaNacimiento($fechaNacimiento){
		$this-> fechaNacimiento = $fechaNacimiento;
	}

} 














 ?>