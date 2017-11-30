<?php 

require_once("datosPersona.php");

class Arbitro extends datosPersona{

	public $gremio;

	public function getGremio()
	{
		return $this->gremio;
	}

	public function setGremio($gremio)
	{
		$this->gremio = $gremio;
	}
}
















 ?>