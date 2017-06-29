<?php 

class Persona{

	private $nombre;
	private $direccion;
	private $nroDocumento;
	private $edad;
	private $nacionalidad;

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getnroDocumento(){
		return $this->nroDocumento;
	}

	public function setnroDocumento($nroDocumento){
		$this->nroDocumento = $nroDocumento;
	}

	public function getEdad(){
		return $this->edad;
	}

	public function setEdad($edad){
		$this->edad = $edad;
	}

	public function getNacionalidad(){
		return $this-> nacionalidad;
	}

	public function setNacionalidad($nacionalidad){
		$this->nacionalidad = $nacionalidad;
	}

	public function MostrarDatos(){
		echo "<h1>Detalles de la persona: </h1>7".'<br>';
		echo "Nombre: ";
		echo $this->getNombre().'<br>';
		echo "Dirección: ";
		echo $this->getDireccion().'<br>';
		echo "Número de documento: ";
		echo $this->getnroDocumento().'<br>';
		echo "Edad: ";
		echo $this->getEdad().'<br>';
		echo "Nacionalidad: ";
		echo $this->getNacionalidad()->getDescripcion().'<br>';
	}












}












 ?>