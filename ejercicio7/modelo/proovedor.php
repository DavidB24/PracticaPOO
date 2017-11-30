<?php 

class Proovedor extends DatosPersona{

	private $ListProd = array();


public function getListProd()
{
	return $this->ListProd;
}

public function setProducto($producto)
{
	$this->ListProd[] = $producto;
}

}











 ?>