<?php
    require 'db.php';
    
    $sql = "SELECT saldo_soles, saldo_dolares FROM cuentas WHERE id= 1";
    $resultado = $conexion-> query($sql);

    if ($resultado && $resultado -> num_rows > 0) { 
        $cuenta = $resultado->fetch_assoc();
    } else {
        $cuenta = null;
    }
?>

<body>
    <h2>Consulta de Saldo - Cajero Automático</h2>
    <?php if($cuenta): ?>
        <p>Saldo en Soles: <?php echo $cuenta ['saldo_soles']; ?> </p>
        <p>Saldo en Dólares: <?php echo $cuenta ['saldo_dolares']; ?> </p>
    <?php else: ?>
        <p>No se encontró la cuenta o no tiene saldo</p>
    <?php endif; ?>
    <a href="inicio.php">Volver</a>
</body>