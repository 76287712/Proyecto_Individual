<?php

require 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monto = $_POST['monto'];
    $moneda = $_POST['moneda'];
    

    // Si se selecciona soles (La columna saldos va actualizarse)
    if($moneda == 'soles ') {
        $sql = "UPDATE cuentas SET saldo_soles= saldo_soles - ? WHERE id= 1";
    } else {
        $sql = "UPDATE cuentas SET saldo_dolares= saldo_dolares - ? WHERE id= 1";
    }

    $calculo = $conexion->prepare($sql);

    // Vinculamos la variable monto
    
    // Asignamos la variable monto, indicamos que es una variable numerica
    $calculo -> bind_param("d", $monto);
    // Si se ejecuta correctamente, se mostraran los mensajes
    if ($calculo -> execute()) {
        echo "Retiro aprobado, gracias!😘😘";
    } else {
        echo "¡ERROR! No se pudo retirar el dinero😒";
    }


}

?>
<h1>MÓDULO DE RETIRO</h1>
<form action="retiro.php" method="POST">
    <label for="">Monto: </label>
    <input type="number" name="monto" id="monto" required>
    <br><br>
    <label for="">Moneda: </label>
    <select name="moneda" id="moneda">
        <option value="soles">Soles</option>
        <option value="dolares">Dolares</option>
    </select>

    <input type="submit" value="Realizar retiro">
</form>