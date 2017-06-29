<?php 

class obraSocial{

	private $id;
	private $razonSocial;
	private $cuit;
	private $sitioWeb;
	private $telefono;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getrazonSocial(){
		return $this->razonSocial;
	}

	public function setrazonSocial($razonSocial){
		$this->razonSocial = $razonSocial;
	}

	public function getCuit(){
		return $this->cuit;
	}

	public function setCuit($cuit){
		$this->cuit = $cuit;
	}

	public function getsitioWeb(){
		return $this->sitioWeb;
	}

	public function setsitioWeb($sitioWeb){
		$this->sitioWeb = $sitioWeb;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}



















}

















 ?>