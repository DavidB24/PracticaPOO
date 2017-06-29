<?php 

class Libro{
	private $id;
	private $titulo;
	private $editorial;
	private $genero;
	private $numeroEdicion;
	private $ISBN;
	private $autor;

public function getId(){
	return $this->id;
}

public function setId($id){
	$this->id = $id;
}

public function getTitulo(){
	return $this-> titulo;
}

public function setTitulo($titulo){
	$this-> titulo = $titulo;
}

public function getEditorial(){
	return $this-> editorial;
}

public function setEditorial($editorial){
	$this-> editorial = $editorial;
}

public function getGenero(){
	return $this-> genero;
}

public function setGenero($genero){
	$this->genero = $genero;
}

public function getnumeroEdicion(){
	return $this-> numeroEdicion;
}

public function setnumeroEdicion($numeroEdicion){
	$this->numeroEdicion = $numeroEdicion;
}

public function getISBN(){
	return $this-> isbn;	
}

public function setISBN($isbn)
{
	$this->isbn = $isbn;
}

public function getAutor()
{
	return $this->autor;
}

public function setAutor($autor)
{
	$this->autor = $autor;
}

public function MostrarDatos(){
	echo "<h1>Detalles del libro:</h1>".'<br>';
	echo "Id: ";
	echo $this->getId().'<br>';
	echo "Título: ";
	echo $this->getTitulo().'<br>';
	echo "Editorial: ";
	echo $this->getEditorial().'<br>';
	echo "Genero: ";
	echo $this->getGenero().'<br>';
	echo "Número de edición: ";
	echo $this->getnumeroEdicion().'<br>';
	echo "ISBN: ";
	echo $this->getISBN().'<br>';
	echo "Autor: ";
	echo $this->getAutor()->getNombre().'<br>';
	echo "Nacionalidad del autor: ";
	echo $this->getAutor()->getNacionalidad().'<br>';

}














}














 ?>