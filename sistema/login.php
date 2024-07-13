<?php

// Este comando sirve para indicarle
// que se requiere el archivo db.php
// para que login.php funcione.
require 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM USUARIOS WHERE NOMBRE = ?";
    $estado = $conexion -> prepare($sql);
    $estado-> execute();
    $resultado =$estado -> get_result();

    if($resultado ->num_rows >0){
        $usuario = $resultado-> fetch_assoc();
        if(password_verify($password, $usuari['password'])){
            $_SESSION['usuario_id']= $usuario['id'];
            header("Location: inicio.php")
            exit();

        }else{
            echo "Clave incorrecta";
        }
    }else{
        echo "Usuario no existe"
    }
}
?>     