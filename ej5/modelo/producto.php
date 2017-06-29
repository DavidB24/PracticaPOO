<?php 

class Producto{
	private $id;
	private $nombre;
	private $codigo;
	private $precio;
	private $marca;
	private $listProovedores;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this-> nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getCodigo(){
		return $this-> codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getlistProovedores(){
		return $this-> listProovedores;
	}

	public function setProovedor($proovedor){
		$this->listProovedores[] = $proovedor;
	}

	public function MostrarDatos(){
		echo "Id: ";
		echo $this->getId().'<br>';
		echo "Nombre: ";
		echo $this->getNombre().'<br>';
		echo "Codigo: ";
		echo $this->getCodigo().'<br>';
		echo "Precio: ";
		echo $this->getPrecio().'<br>';
		echo "Marca: ";
		echo $this->getMarca().'<br>';
		echo "<h2>Datos de los proovedores:</h2>".'<br>';

		foreach ($this->listProovedores as $proovedor) {
			echo "Id: ";
			echo $proovedor->getId().'<br>';
			echo "Nombre: ";
			echo $proovedor->getNombre().'<br>';
			echo "Cuil: ";
			echo $proovedor->getCUIL().'<br>';
			echo "Dirección: ";
			echo $proovedor->getDireccion().'<br>';
			echo "Telefono: ";
			echo $proovedor->getTelefono().'<br>';
		}


	}


























}


















 ?>