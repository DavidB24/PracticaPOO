<?php 

class Persona{

	private $id;
	private $nombre;
	private $apellido;
	private $fechaNacimiento;
	private $obraSocial;
	private $listDocumentos;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id =$id;
	}

	public function getNombre()
	{
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

	public function getfechaNacimiento()
	{
		return $this->fechaNacimiento;
	}

	public function setfechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento;
	}

	public function getobraSocial()
	{
		return $this->obraSocial;
	}

	public function setobraSocial($obraSocial)
	{
		$this->obraSocial= $obraSocial;
	}

	public function getlistDocumentos()
	{
		return $this->listDocumentos;
	}

	public function setDocumento($documento)
	{
		$this->listDocumentos[] = $documento;
	}

	public function MostrarDatos()
	{
		echo "Id: ";
		echo $this->getId().'<br>';
		echo "Nombre: ";
		echo $this->getNombre().'<br>';
		echo "Apellido: ";
		echo $this->getApellido().'<br>';
		echo "Fecha de nacimiento: ";
		echo $this->getfechaNacimiento().'<br>';
		echo "Obra Social: ";
		echo $this->getobraSocial()->getrazonSocial().'<br>';
		echo $this->getobraSocial()->getsitioWeb().'<br>';
		
		
		foreach ($this->listDocumentos as $documento ) {
			echo "Tipo de documento: ";
			echo $documento->gettipoDocumento()->getDescripcion().'<br>';
			echo "Numero de documento: ";
			echo $documento->getNumero().'<br>';
		}


	}




















}



















 ?>