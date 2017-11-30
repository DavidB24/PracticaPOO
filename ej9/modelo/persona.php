<?php 
//Persona: Id, Nombre, Documento, Fecha Nacimiento, Direccion, Telefono, Tipo Integrante

class Persona{

	private $id;
	private $nombre;
	private $documento;
	private $fechaNacimiento;
	private $direccion;
	private $telefono;
	private $tipoIntegrante;

public function getId()
{
	return $this->id;
}

public function setId($id)
{
	$this-> id = $id;
}

public function getNombre()
{
	return $this->nombre;
}

public function setNombre($n)
{
	$this->nombre = $n;
}

public function getDocumento()
{
	return $this->documento;
}

public function setDocumento($d)
{
	$this->documento = $d;
}

public function getFechaNacimiento()
{
	return $this->fechaNacimiento;
}

public function setFechaNacimiento($fn)
{
	$this->fechaNacimiento = $fn;
}

public function getDireccion()
{
	return $this->direccion;
}

public function setDireccion($d)
{
	$this->direccion = $d;
}

public function getTelefono()
{
	return $this->telefono;
}

public function setTelefono($t)
{
	$this->telefono = $t;
}

public function getTipoIntegrante()
{
	return $this->tipoIntegrante;
}

public function setTipoIntegrante($ti)
{
	$this->tipoIntegrante = $ti;
}

}

















 ?>