<?php 


class PlanInspeccion{

	private $id;
	private $descripcion;
	private $codInspeccion;
	private $listEnsayos = array();

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	public function getCodInspeccion()
	{
		return $this->codInspeccion;
	}

	public function setCodInspeccion($codInspeccion)
	{
		$this->codInspeccion = $codInspeccion;
	}

	public function getListEnsayos()
	{
		return $this->listEnsayos;
	}

	public function setEnsayo($ensayo)
	{
		$this->listEnsayos[] = $ensayo;
	}


























}




















 ?>