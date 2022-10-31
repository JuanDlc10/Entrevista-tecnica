<?php
    include './servidor/conexion.php';
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_items WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    $item = mysqli_fetch_array($respuesta); 
    include './header.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar producto</h1>
            <form action="./servidor/actualizar.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden name="id" value="<?php echo $item['id'];?>">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control"
                value="<?php echo $item['nombre'];?>">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" class="form-control"
                value="<?php echo $item['categoria'];?>">
                    <option value="opcion1">
                        opcion 1
                    </option>
                    <option value="opcion2">
                        opcion 2
                    </option>
                    <option value="opcion3">
                        opcion 3
                    </option>
                </select>
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control"
                value="<?php echo $item['precio'];?>">
                <label for="imagen">Cargar imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control"
                value="<?php echo $item['imagen'];?>">
                <button class="btn btn-primary mt-4">
                    Actualizar producto
                </button>
            </form>
        </div>
    </div>
</div>

<?php include './footer.php' ?>