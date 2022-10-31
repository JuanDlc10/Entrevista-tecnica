<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./conexion.php";

$conexion = conexion();
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = floatval($_POST['precio']);
$imagen = $_FILES['imagen']['name'];
$ruta = $_FILES['imagen']['tmp_name'];
$destino = 'fotos/'.$imagen;
copy($ruta, $destino);
$sql = "UPDATE t_items SET nombre = '$nombre',
                                categoria = '$categoria',
                                precio = '$precio',
                                imagen = '$destino'
                                WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    if($respuesta){
        header('location:../index.php');
    }else{
        echo 'No se pudo actualizar';
    }
?>