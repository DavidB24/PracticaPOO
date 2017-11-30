<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/TP3/modelo/Libro.php';
require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/TP3/modelo/Autor.php';

if(!isset($_GET["id"]))
{
    header('Location: libros.php?e=No se ha encontrado el libro');
}
else
{
//Aqui se debe buscar el Libro
?>
<?php
include('include/cabecera.php');
?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Libros
                <small>Modificando Libros</small>
            </h1>
        </div>
    </div>
<form method="post" action="../acciones/libros/editar.php">
        <input name="id" type="text" class="form-control hidden" placeholder="Titulo" value="<?php echo $l->getId(); ?>">
        <div class="col-md-8">
            Titulo
            <input name="titulo" type="text" class="form-control" placeholder="Titulo" value="<?php echo $l->getTitulo(); ?>">
        </div>
        <div class="col-md-8">
            Autor
            <select name="autor" class="form-control">
                <?php
                $listAutores = Autor::BuscarListAutores();
                foreach( $listAutores as $autor)
                {?>
                    <option <?php if($autor->getId() == $l->getIdautor()){  ?> selected <?php }?> value="<?php echo $autor->getId(); ?>"><?php echo $autor->getNombre(); ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <br>
    <div class="col-m-8">
        <button type="submit" class="btn btn-success">Aceptar</button>
    </div>

</form>
<?php }?>
<?php
include('include/pie.php');
?>
