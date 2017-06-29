<?php 


class Persona{

	private $nombre;
	private $direccion;
	private $nroDocumento;
	private $edad;

	public function __construct($nombre,$direccion,$nroDocumento,$edad)	{
		
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->nroDocumento = $nroDocumento;
		$this->edad = $edad;
	}


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

	public function getnroDocumento()
	{
		return $this->nroDocumento;
	}

	public function setnroDocumento($nroDocumento)
	{
		$this->nroDocumento = $nroDocumento;
	}

	public function getEdad(){
		return $this->edad;
	}

	public function setEdad($edad)
	{
		$this->edad = $edad;
	}

	public function MostrarDatos()

	{
		echo "<h1>Datos de la persona: </h1>".'<br>';
		echo "Nombre: ";
		echo $this->getNombre().'<br>';
		echo "Direccion: ";
		echo $this->getDireccion().'<br>';
		echo "Numero de documento: ";
		echo $this->getnroDocumento().'<br>';
		echo "Edad: ";
		echo $this->getEdad().'<br>';

	}




}










 ?>