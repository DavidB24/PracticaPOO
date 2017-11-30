<?php 


class Cliente extends DatosPersona{

	private $necesitoFactura;


	public function __construct($nombre,$apellido)
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido;

	}

	public function getNecesitoFactura()
	{
		return $this->necesitoFactura;
	}

	public function setNecesitoFactura($necesitoFactura)
	{
		$this->necesitoFactura = $necesitoFactura;
	}
}























 ?>