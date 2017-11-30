<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/TP3/modelo/Autor.php';
require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/TP3/modelo/Libro.php';

if(isset($_POST["titulo"]) && $_POST["titulo"]!='')
{
    $a= new Libro();
    $a->setTitulo($_POST["titulo"]);
    $a->setIdautor($_POST["autor"]);
    $a->Agregar();
    header('Location: ../../vistas/libros.php?m=Libro Agregado Con Exito');
}
else
{
    header('Location: ../../vistas/libros.php?e=Ingrese los datos necesarios');
}