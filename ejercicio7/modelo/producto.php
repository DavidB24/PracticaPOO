<?php 


class Producto{

	private $id;
	private $codigo;
	private $descripcion;
	private $marca;
	private $costo;
	private $precioVenta;


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	public function getMarca(){

		return $this->marca;
	}

	public function setMarca($marca)
	{
		$this->marca = $marca;
	}

	public function getCosto()
	{
		return $this->costo;
	}

	public function setCosto($costo)
	{
		$this->costo = $costo;
	}

	public function getPrecioVenta()
	{
		return $this->precioVenta;
	}

	public function setPrecioVenta($precioVenta)
	{
		$this->precioVenta = $precioVenta;
	}

















}





















 ?>