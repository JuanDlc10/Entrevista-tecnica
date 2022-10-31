<?php include './header.php' ?>
<?php include './servidor/conexion.php' ?>



<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4 text-center">Entrevista técnica</h1>
            <a href="./agregar.php" class="btn btn-primary">
                Agregar registro
            </a>
            <?php include './tabla.php' ?>
        </div>
    </div>
</div>




<?php include './footer.php' ?>