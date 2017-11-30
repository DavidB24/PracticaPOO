<?php 

class Partido{

public $id;
public $EquipoLocal;
public $EquipoVisitante;
public $FechaPartido;
public $Arbitro;


public function getId()
{
	return $this-> id;
}

public function setId($id)
{
	$this-> id = $id;
}

public function getEquipoLocal()
{
	return $this->EquipoLocal;
}

public function setEquipoLocal($el)
{
	$this->EquipoLocal = $el;
}

public function getEquipoVisitante()
{
	return $this->EquipoVisitante;
}

public function setEquipoVisitante($ev)
{
	$this->EquipoVisitante  = $ev;
}

public function getFechaPartido()
{
	return $this->FechaPartido;
}

public function setFechaPartido($fp)
{
	$this->FechaPartido = $fp;
}

public function getArbitro()
{
	return $this->arbitro;
}

public function setArbitro($a)
{
	$this->arbitro = $a;
}


	public function MostrarDatos()
	{

		echo "<h2>Datos del partido</h2>";

		echo "Id: ".$this->getId().'<br>';
		
		echo "Fecha del partido: ".$this->getFechaPartido().'<br>';
		echo "Arbitro: ".$this->getArbitro()->getNombre()." ".$this->getArbitro()->getApellido().'<br>';
		echo "Gremio del arbitro: ".$this->getArbitro()->getGremio().'<br>';


		echo "---------------------------".'<br>';

		echo "<h2>Datos de los equipos:</h2>";

		echo "<h4>Equipo Local: </h4>".$this->getEquipoLocal()->getNombreEquipo().'<br>';
		echo "Director Técnico: ".$this->getEquipoLocal()->getDirectorTecnico()->getNombre()." ".$this->getEquipoLocal()->getDirectorTecnico()->getApellido().'<br>';
		echo "Jugadores: ".'<br>';
		

		//$lj= $this->getEquipoLocal()->getListJugadores();

		foreach ($this->getEquipoLocal()->getListJugadores() as $j) {

			echo "Id: ".$j->getId().'<br>';
		    echo "Nombre: ".$j->getNombre().'<br>';
			echo "Apellido: ".$j->getApellido().'<br>';
		}

		echo "<br>";
		echo "---------------------------".'<br>';

		
			
		echo "<h4>Equipo Visitante: </h4>".$this->getEquipoVisitante()->getNombreEquipo().'<br>';
		echo "Director Técnico: ".$this->getEquipoVisitante()->getDirectorTecnico()->getNombre()." ".$this->getEquipoVisitante()->getDirectorTecnico()->getApellido().'<br>';
			echo "Jugadores: ".'<br>';

				foreach ($this->getEquipoVisitante()->getListJugadores() as $j) {

			echo "Id: ".$j->getId().'<br>';
		    echo "Nombre: ".$j->getNombre().'<br>';
			echo "Apellido: ".$j->getApellido().'<br>';
		}


			


		}















		/*echo "Descripción:".$this->getMateriaPrima()->getDescripcion().'<br>';


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
		}*/

	

















}


























 ?>