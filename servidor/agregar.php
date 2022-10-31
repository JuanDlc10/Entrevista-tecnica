<?php include './conexion.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conexion = conexion();
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = floatval($_POST['precio']);
$imagen = $_FILES['imagen']['name'];
$ruta = $_FILES['imagen']['tmp_name'];
$destino = 'fotos/'.$imagen;
copy($ruta, $destino);

$sql = "INSERT INTO t_items(
    nombre,
    categoria,
    precio,
    imagen)
    VALUES (
        '$nombre',
        '$categoria',
        '$precio',
        '$destino')";

$respuesta = mysqli_query($conexion, $sql);
if($respuesta) {
    header ('location:../index.php');
}else{
    echo 'No se pudo agregar el produto';
}






?>
