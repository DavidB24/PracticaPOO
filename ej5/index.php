<?php 

require_once("modelo/producto.php");
require_once("modelo/proovedor.php");

$p= new Producto();

$p->setId('1');
$p->setNombre('Coca cola');
$p->setCodigo('2');
$p->setPrecio('25.00');
$p->setMarca('Coca Cola company');

$proovedor1 = new Proovedor();

$proovedor1->setId('1');
$proovedor1->setNombre('Jose Lopez');
$proovedor1->setCUIL('20-223232-5');
$proovedor1->setDireccion('España 320');
$proovedor1->setTelefono('341343434');

$proovedor2 = new Proovedor();

$proovedor2->setId('2');
$proovedor2->setNombre('Ernesto Lopez');
$proovedor2->setCUIL('20-223232-5');
$proovedor2->setDireccion('España 320');
$proovedor2->setTelefono('341343434');

$proovedor3 = new Proovedor();

$proovedor3->setId('3');
$proovedor3->setNombre('Mariano Lopez');
$proovedor3->setCUIL('20-223232-5');
$proovedor3->setDireccion('España 320');
$proovedor3->setTelefono('341343434');


$p->setProovedor($proovedor1);
$p->setProovedor($proovedor2);
$p->setProovedor($proovedor3);
$p->MostrarDatos();



















 ?>