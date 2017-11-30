<?php 



require_once("modelo/lote.php");
require_once("modelo/MateriaPrima.php");
require_once("modelo/planInspeccion.php");
require_once("modelo/ensayos.php");


$n = new Lote();
$n-> setId("1");
$n-> setFecha("22/10/2017");
$n-> setNLote("15");
$n->setKg("220 kg");
$n->setEstatus("En el lote");


$mp = new MateriaPrima();
$mp-> setId("1");
$mp->setCodMateriaPrima("226");
$mp->setDescripcion("Capuccino");


$pi = new PlanInspeccion();

$pi ->setId("21");
$pi ->setDescripcion("Inspección de Café");
$pi ->setCodInspeccion("114");

$e = new Ensayos();

$e ->setId("20");
$e->setCodigo("2008");
$e->setDescripcion("Ensayo de cafe");
$e->setMin("1");
$e->setMax("200");


$n->setMateriaPrima($mp);
$pi->setEnsayo($e);

$mp->setPlanInspeccion($pi);


$n->MostrarDatos();

































 ?>