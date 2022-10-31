<?php
    $conexion = conexion();
    $sql = 'SELECT * FROM t_items';
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-hover table-bordered mt-4">
    <thead>
        <tr class="text-center">
            <th>Id</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio $</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    <tbody class="text-center">
        <?php while($ver = mysqli_fetch_array($respuesta)){ ?>
        <tr>
            <td> <?php echo $ver['id']; ?> </td>
            <td> <?php echo $ver['nombre']; ?> </td>
            <td> <?php echo $ver['categoria']; ?> </td>
            <td> <?php echo $ver['precio']; ?> </td>
            <td> <img width="80px" src="./servidor/<?php echo $ver['imagen']; ?>" > </td>
            <td>
                <a href="./actualizar.php?id=<?php echo $ver['id']; ?>" 
                class="btn btn-warning btn-sm">
                    Editar
                </a>
            </td>
            <td>
                <a href="./servidor/eliminar.php?id=<?php echo $ver['id']; ?>" 
                class="btn btn-danger btn-sm">
                    Eliminar
                </a>
        </td>
        </tr>
        <?php } ?>
    </tbody>
    </thead>
</table>