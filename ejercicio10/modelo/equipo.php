<?php 

class Equipo{
	public $id;
	public $NombreEquipo;
	public $ListJugadores;
	public $DirectorTecnico;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombreEquipo()
	{
		return $this->NombreEquipo;
	}

	public function setNombreEquipo($ne)
	{
		$this->NombreEquipo = $ne;
	}

	public function getListJugadores()
	{
		return $this->ListJugadores;
	}

	public function setJugador($j)
	{
		$this->ListJugadores[] = $j;
	}

	public function getDirectorTecnico()
	{
		return $this->DirectorTecnico;
	}

	public function setDirectorTecnico($dt)
	{
		$this->DirectorTecnico = $dt;
	}























}



















 ?>