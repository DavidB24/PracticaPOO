<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/TP3/modelo/Autor.php';

if(!isset($_GET["id"]))
{
    header('Location: autores.php?e=No se ha encontrado el autor');
}
else
{
//Aqui se debe buscar el Autor
?>
<?php
include('include/cabecera.php');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Autores
            <small>Modificando Autores</small>
        </h1>
    </div>
</div>
    <div class="col-md-8">
        <form method="post" action="../acciones/autores/editar.php">

            <div class="row">
                <input name="id" type="text" class="form-control hidden" placeholder="Nombre" value="<?php echo $a->getId(); ?>">
                <div class="col-md-12">
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="<?php echo $a->getNombre(); ?>">
                </div>
                <hr>
                <div class="col-md-12">
                    <input name="direccion" type="text" class="form-control" placeholder="Direccion" value="<?php echo $a->getDireccion(); ?>">
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-success">Modificar</button>

        </form>
    </div>
<?php }?>

<?php
include('include/pie.php');
?>


