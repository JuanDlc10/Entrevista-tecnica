<?php
function conexion(){
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd = 'items';
    $puerto = '3307';
    return mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $bd,
        $puerto
    );
}
?>