<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/TP3/modelo/Autor.php';

if(isset($_POST["nombre"]) && $_POST["nombre"]!='')
{
    $a= new Autor();
    $a->setNombre($_POST["nombre"]);
    $a->setDireccion($_POST["direccion"]);
    $a->Agregar();
    header('Location: ../../vistas/autores.php?m=Autor Agregado Con Exito');
}
else
{
    header('Location: ../../vistas/autores.php?e=Ingrese los datos necesarios');
}