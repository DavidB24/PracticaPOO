<?php 

class Prestamo {
	private $id;
	private $monto;
	private $fecha;
	private $cantCuotas;
	private $listPersonas;
	private $lineaPrestamo;




public function getId()
{
	return $this->id;
}

public function setId($id)
{
	$this->id = $id;
}

public function getMonto()
{
	return $this->monto;
}

public function setMonto($m)
{
	$this->monto = $m;
}

public function getFecha()
{
	return $this->fecha;
}

public function setFecha($f)
{
	$this->fecha = $f;
}

public function getCantCuotas()
{
	return $this->cantCuotas;
}

public function setCantCuotas($cc)
{
	$this->cantCuotas = $cc;
}

public function getListPersonas()
	{
		return $this->listPersonas;
	}

public function setPersona($p)
	{
		$this->listPersonas[] = $p;
	}

public function getlineaPrestamo()
	{
		return $this->lineaPrestamo;
	}

public function setlineaPrestamo($lp)
{
	$this->lineaPrestamo = $lp;
}

public function MostrarDatos()
{

	echo "<h2>Prestamo</h2>";

		echo "Id: ".$this->getId().'<br>';
		echo "Monto: ".$this->getMonto().'<br>';
		echo "Fecha: ".$this->getFecha().'<br>';
		echo "Cantidad de Cuotas: ".$this->getCantCuotas().'<br>';
		echo "Lista de personas: ".'<br>';

		$personas = $this->getListPersonas();

		foreach ($personas as $p ) {

			echo "Id: ".$p->getId().'<br>';
		    echo "Nombre: ".$p->getNombre().'<br>';
			echo "Documento: ".$p->getDocumento().'<br>';
			echo "Fecha de nacimiento: ".$p->getFechaNacimiento().'<br>';
			echo "Dirección: ".$p->getDireccion().'<br>';
			echo "Teléfono: ".$p->getTelefono().'<br>';
			echo "Tipo de integrante: ".$p->getTipoIntegrante().'<br>';

		 
		}
		echo "<h2>Línea de prestamo: </h2>";
		echo "Descripción:".$this->getlineaPrestamo()->getDescripcion().'<br>';
		echo "Código:".$this->getlineaPrestamo()->getCodigo().'<br>';
		echo "Tasa:".$this->getlineaPrestamo()->getTasaInteres().'<br>';

		echo "---------------------------".'<br>';


		

	}





}





















 ?>