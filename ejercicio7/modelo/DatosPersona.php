<?php 

abstract class DatosPersona{

	public $id;
	public $nombre;
	public $apellido;
	public $NroDoc;
	public $telefono;
	public $direccion;
	public $mail;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getNroDoc()
	{
		return $this->NroDoc;
	}

	public function setNroDoc($nroDoc)
	{
		$this->nroDoc = $nroDoc;
	}

	public function getTelefono()
	{
		return $this->telefono;
	}

	public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}

	public function getDireccion()
	{
		return $this->direccion;
	}

	public function setDireccion($direccion)
	{
		$this->direccion = $direccion;
	}

	public function getMail()
	{
		return $this->mail;
	}

	public function setMail($mail)
	{
		$this->mail = $mail;
	}






















}

















 ?>