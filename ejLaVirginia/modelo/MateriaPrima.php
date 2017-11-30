<?php 

class MateriaPrima{

	private $id;
	private $codMateriaPrima;
	private $descripcion;
	private $planInspeccion;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getCodMateriaPrima()
	{
		return $this->codMateriaPrima;
	}

	public function setCodMateriaPrima($codMateriaPrima)
	{
		$this->codMateriaPrima = $codMateriaPrima;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	public function getPlanInspeccion()
	{
		return $this->planInspeccion;
	}

	public function setPlanInspeccion($planInspeccion)
	{
		$this->planInspeccion = $planInspeccion;
	}

















}






















 ?>