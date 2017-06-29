<?php 

require_once('modelo/persona.php');

$p= new Persona();

$p->setNombre("David");
$p->setDireccion("España 320");
$p->setnroDocumento("36396690");
$p->setEdad("24");

$p->MostrarDatos();























 ?>