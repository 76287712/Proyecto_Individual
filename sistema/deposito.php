<?php

require 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monto = $_POST['monto'];
    $moneda = $_POST['moneda'];
    

    // Si se selecciona soles (La columna saldos va actualizarse)
    if($moneda == 'soles') {
        $sql = "UPDATE cuentas SET saldo_soles= saldo_soles + ? WHERE id= 1";
    } else {
        $sql = "UPDATE cuentas SET saldo_dolares= saldo_dolares + ? WHERE id= 1";
    }

    $calculo = $conexion->prepare($sql);

    // Vinculamos la variable monto
    
    // Asignamos la variable monto, indicamos que es una variable numerica
    $calculo -> bind_param("d", $monto);
    // Si se ejecuta correctamente, se mostraran los mensajes
    if ($calculo -> execute()) {
        echo "Deposito realizado satisfactoriamente";
    } else {
        echo "¡ERROR! No se pudo realiza el depósito😒";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/812c8ee19a.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&family=Poppins:wght@400;700;900&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css-php/php.css">
</head>
<body>
    <form action="deposito.php" method="POST">
    <h1>MÓDULO DE DEPÓSITO</h1>
        <label for="">Monto: </label>
        <input type="number" name="monto" id="monto" step="0.01" required>
        <br><br>
        <label for="">Moneda: </label>
        <select name="moneda" id="moneda">
            <option value="soles">Soles</option>
            <option value="dolares">Dolares</option>
        </select>
        <br><br>
        <input type="submit" value="Depositar">    
    </form>
</body>
</html>
