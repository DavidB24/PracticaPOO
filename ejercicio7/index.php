<?php 

require_once 'modelo/DatosPersona.php';
require_once 'modelo/cliente.php';
require_once 'modelo/proovedor.php';
require_once 'modelo/producto.php';
require_once 'modelo/marca.php';


$c = new Cliente('David','Bucci');

$c->setId('1');
//$c->setNombre('David');
//$c->setApellido('Bucci');
$c->setNroDoc('36396690');
$c->setTelefono('2131231');
$c->setDireccion('España 320');
$c->setMail('davidbucci24@outlook.es');
$c->setNecesitoFactura(true);

echo "<h2>Cliente: </h2>".'<br>';
echo "Id: ".$c->getId().'<br>';
echo "Nombre: ".$c->getNombre().'<br>';
echo "Apellido: ".$c->getApellido().'<br>';
echo "Numero de documento: ".$c->getNroDoc().'<br>';
echo "Telefono: ".$c->getTelefono().'<br>';
echo "Direccion: ".$c->getDireccion().'<br>';
echo "Mail: ".$c->getMail().'<br>';
echo "Necesita factura? ".$c->getNecesitoFactura().'<br>';


$m = new Marca();

$m->setId('1');
$m->setDescripcion('Coca Cola');
$m->setCodigo('22');

$m2 = new Marca();

$m2->setId('2');
$m2->setDescripcion('Pepsi');
$m2->setCodigo('23');

$p = new Producto();

$p->setId('1');
$p->setCodigo('101');
$p->setDescripcion('Gaseosa 500ml');

$p->setCosto('$20');
$p->setPrecioVenta('$30');
$p->setMarca($m);

$p2 = new Producto();

$p2->setId('2');
$p2->setCodigo('102');
$p2->setDescripcion('Gaseosa 500ml');

$p2->setCosto('$25');
$p2->setPrecioVenta('$31');
$p2->setMarca($m2);

$p3 = new Producto();

$p3->setId('3');
$p3->setCodigo('103');
$p3->setDescripcion('Gaseosa 1 litro');

$p3->setCosto('$55');
$p3->setPrecioVenta('$41');
$p3->setMarca($m2);


$proov = new Proovedor();

$proov->setId('1');
$proov->setNombre('Jose');
$proov->setApellido('Perez');
$proov->setNroDoc('23432423');
$proov->setTelefono('2131231');
$proov->setDireccion('Italia 2500');
$proov->setMail('joseperez@outlook.es');
$proov->setProducto($p);
$proov->setProducto($p2);
$proov->setProducto($p3);


echo "<h2>Datos del Proovedor: </h2>".'<br>';

echo "Id: ".$proov->getId().'<br>';
echo "Nombre: ".$proov->getNombre().'<br>';
echo "Apellido: ".$proov->getApellido().'<br>';
echo "Numero de documento: ".$proov->getNroDoc().'<br>';
echo "Telefono: ".$proov->getTelefono().'<br>';
echo "Direccion: ".$proov->getDireccion().'<br>';
echo "Mail: ".$proov->getMail().'<br>';

echo "<h3>Lista de articulos:</h3>".'<br>';


		foreach ( $proov->getListProd() as $producto) {
			echo "Descripcion: ";
			echo $producto->getDescripcion().'<br>';
			echo "Codigo: ";
			echo $producto->getCodigo().'<br>';
			echo "Marca: ";
			echo $producto->getMarca()->getDescripcion().'<br>';
		
		
			echo "<br>";

		}








































 ?>