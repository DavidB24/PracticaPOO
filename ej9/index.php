<?php 


require_once 'modelo/persona.php';
require_once 'modelo/prestamo.php';
require_once 'modelo/lineaPrestamo.php';

$prest = new Prestamo();
$prest->setId("1");
$prest->setMonto("225");
$prest->setFecha("22/12/2016");
$prest->setcantCuotas("12");

$p = new Persona();
$p->setId("1");
$p->setNombre("Jose Perez");
$p->setDocumento("30356365");
$p->setFechaNacimiento("15/09/1980");
$p->setDireccion ("Cochabamba 506");
$p->setTelefono ("3412432142");
$p->setTipoIntegrante("Titular");

$p2 = new Persona();
$p2->setId("2");
$p2->setNombre("Pablo Lopez");
$p2->setDocumento("25356365");
$p2->setFechaNacimiento("15/09/1970");
$p2->setDireccion ("Ente Rios 1506");
$p2->setTelefono ("341245200");
$p2->setTipoIntegrante("Codeudor");

$p3 = new Persona();
$p3->setId("3");
$p3->setNombre("Ernesto Muñoz");
$p3->setDocumento("15356365");
$p3->setFechaNacimiento("15/09/1965");
$p3->setDireccion ("España 2600");
$p3->setTelefono ("341785999");
$p3->setTipoIntegrante("Codeudor");

$lp = new lineaPrestamo();
$lp->setId("1");
$lp->setDescripcion("Prestamo de 8 cuotas");
$lp->setCodigo("2500");
$lp->setTasaInteres("25%");

$prest->setPersona($p);
$prest->setPersona($p2);
$prest->setPersona($p3);
$prest->setlineaPrestamo($lp);

$prest->MostrarDatos();



























 ?>