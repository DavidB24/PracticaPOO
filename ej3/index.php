<?php 

require_once('modelo/nacionalidad.php');
require_once('modelo/persona.php');

$p = new Persona();

$p->setNombre('David');
$p->setDireccion('España 320');
$p->setnroDocumento('36396690');
$p->setEdad('24');


$n = new Nacionalidad();

$n->setId('1');
$n->setDescripcion('Argentino');

$p->setNacionalidad($n);
$p->MostrarDatos();


















 ?>