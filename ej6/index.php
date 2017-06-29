<?php 

require_once("modelo/persona.php");
require_once("modelo/documento.php");
require_once("modelo/tipodocumento.php");
require_once("modelo/obrasocial.php");

$os = new obraSocial();
$os->setId("1");
$os->setrazonSocial("Osde");
$os->setCuit("20-2323-6");
$os->setsitioWeb("www.obrasocial.com");
$os->setTelefono("3434343");


$td1 = new TipoDocumento;
$td1->setId('1');
$td1->setDescripcion('DNI');
$td1->setHabilitado('true');

$td2 = new TipoDocumento;
$td2->setId('2');
$td2->setDescripcion('Pasaporte');
$td2->setHabilitado('true');

$p=new Persona();
$p->setId('1');
$p->setNombre('David');
$p->setApellido('Bucci');
$p->setfechaNacimiento('24/12/1992');
$p->setobraSocial('Pami');

$d1= new Documento();
$d1->setId('1');
$d1->setNumero('40123123');
$d1->setHabilitado('true');
$d1->settipoDocumento($td1);

$d2= new Documento();
$d2->setId('2');
$d2->setNumero('50123123');
$d2->setHabilitado('true');
$d2->settipoDocumento($td2);

$p->setobraSocial($os);
$p->setDocumento($d1);
$p->setDocumento($d2);

$p->MostrarDatos();
























 ?>