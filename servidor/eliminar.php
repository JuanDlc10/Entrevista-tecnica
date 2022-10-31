<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
    include './conexion.php';
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "DELETE FROM t_items WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    if($respuesta){
        header('location:../index.php');
    }else{
        echo 'No se pudo eliminar';
    }
?>