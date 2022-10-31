<?php include './header.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar producto</h1>
            <form action="./servidor/agregar.php" method="post" enctype="multipart/form-data">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required >
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" class="form-control">
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
                <input type="text" name="precio" id="precio" class="form-control" required >
                <label for="imagen">Cargar imagen</label>
                <input type="file" accept="image/*" name="imagen" id="imagen" class="form-control" required>
                <button class="btn btn-primary mt-4">
                    Agregar producto
                </button>
            </form>
        </div>
    </div>
</div>

<?php include './footer.php' ?>