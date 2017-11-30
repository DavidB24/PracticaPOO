<?php 

require_once("arbitro.php");
require_once("datosPersona.php");
require_once("directorTecnico.php");
require_once("equipo.php");
require_once("jugador.php");
require_once("partido.php");


$a = new Arbitro();

$a->setId("1");
$a->setNombre("Pablo");
$a->setApellido ("Lunati");
$a->setGremio("AFA");

$dt = new DirectorTecnico();

$dt->setId("1");
$dt->setNombre("Marcelo");
$dt->setApellido("Gallardo");

$dt2 = new DirectorTecnico();

$dt2->setId("2");
$dt2->setNombre("Guillermo");
$dt2->setApellido("Barros Schelotto");

$j = new Jugador();

$j->setId("1");
$j->setNombre("Enzo");
$j->setApellido("Perez");


$j2 = new Jugador();

$j2->setId("2");
$j2->setNombre("Ignacio");
$j2->setApellido("Scocco");


$j3 = new Jugador();

$j3->setId("3");
$j3->setNombre("Fernando");
$j3->setApellido("Gago");

$j4 = new Jugador();

$j4->setId("4");
$j4->setNombre("Wilmar");
$j4->setApellido("Barrios");

$e = new Equipo();

$e->setId("1");
$e->setNombreEquipo("River Plate");
$e->setJugador($j);
$e->setJugador($j2);
$e->setDirectorTecnico($dt);

$e2 = new Equipo();

$e2->setId("2");
$e2->setNombreEquipo("Boca Juniors");
$e2->setJugador($j3);
$e2->setJugador($j4);
$e2->setDirectorTecnico($dt2);

$p = new Partido();

$p->setId("1");
$p->setEquipoLocal($e);
$p->setEquipoVisitante($e2);
$p->setFechaPartido("22/11/2017");
$p->setArbitro($a);
$p->mostrarDatos();































 ?>