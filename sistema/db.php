<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "cajero";

$conexion = new mysqli($servidor, $usuario, $password, $db, 3309);

if($conexion -> connect_error){
    echo("Sin conexións");
}
?>
