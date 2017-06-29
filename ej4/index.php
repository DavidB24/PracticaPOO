<?php 

require_once("modelo/libro.php");
require_once("modelo/autor.php");

$l = new Libro();

$l->setId("1");
$l->setTitulo("La casa embrujada");
$l->setEditorial("Casablanca");
$l->setGenero("Terror");
$l->setnumeroEdicion("11");
$l->setISBN("1555");


$a = new Autor();

$a->setId("2");
$a->setNombre("Edgar Allan Poe");
$a->setNacionalidad("Ingles");
$a->setfechaNacimiento("23/7/1911");

$l->setAutor($a);
$l->MostrarDatos();















 ?>