<?php 

class lineaPrestamo{

private $id;
private $descripcion;
private $codigo;
private $tasaInteres;

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

public function setDescripcion($desc)
{
	$this->descripcion = $desc;

}

public function getCodigo()
{
	return $this->codigo;
}

public function setCodigo($codigo)
{
	$this->codigo = $codigo;
}

public function getTasaInteres()
{
	return $this->tasaInteres;
}

public function setTasaInteres($ti)
{
	$this->tasaInteres = $ti;
}





















}

















 ?>