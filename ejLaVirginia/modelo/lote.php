<?php 


class Lote{

	private $id;
	private $fecha;
	private $NLote;
	private $kg;
	private $estatus;
	private $materiaPrima;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getNLote()
	{
		return $this->NLote;
	}

	public function setNLote($NLote)
	{
		$this->NLote =$NLote;
	}

	public function getKg()
	{
		return $this->kg;
	}

	public function setKg($kg)
	{
		$this->kg = $kg;
	}

	public function getEstatus()
	{
		return $this->status;
	}

	public function setEstatus($estatus)
	{
		$this->estatus= $estatus;
	}

	public function getMateriaPrima()
	{
		return $this->materiaPrima;
	}

	public function setMateriaPrima($materiaPrima)
	{
		$this->materiaPrima = $materiaPrima;
	}

	public function MostrarDatos()
	{

		echo "<h2>Lote</h2>";

		echo "Id: ".$this->getId().'<br>';
		echo "Fecha: ".$this->getFecha().'<br>';
		echo "Número de lote: ".$this->getNLote().'<br>';
		echo "Kilaje: ".$this->getKg().'<br>';

		echo "---------------------------".'<br>';

		echo "<h2>Materia Prima</h2>";

		echo "Descripción:".$this->getMateriaPrima()->getDescripcion().'<br>';


		echo "---------------------------".'<br>';

		echo "<h2>Plan de inspección</h2>";

		echo "Código:".$this->getMateriaPrima()->getPlanInspeccion()->getCodInspeccion().'<br>';
		echo "Descripción:".$this->getMateriaPrima()->getPlanInspeccion()->getDescripcion().'<br>';

		echo "---------------------------".'<br>';

		echo "<h2>Ensayos</h2>";

		$pi= $this->getMateriaPrima()->getPlanInspeccion();

		foreach ($pi->getListEnsayos() as $e) {

			echo "Id: ".$e->getId().'<br>';
		    echo "Codigo: ".$e->getCodigo().'<br>';
			echo "Descripcion: ".$e->getDescripcion().'<br>';
			echo "Min: ".$e->getMin().'<br>';
			echo "Max: ".$e->getMax().'<br>';

		   echo "---------------------------".'<br>';
		}

	}











}











 ?>