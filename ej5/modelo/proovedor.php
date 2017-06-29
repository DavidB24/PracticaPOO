<?php 

class Proovedor{

	private $id;
	private $nombre;
	private $CUIL;
	private $direccion;
	private $telefono;


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getCUIL(){
		return $this->CUIL;
	}

	public function setCUIL($CUIL){
		$this->CUIL = $CUIL;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}





















}














 ?>