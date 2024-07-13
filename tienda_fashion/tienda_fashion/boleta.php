<?php

require('fpdf/fpdf.php');


$cliente = $_POST['cliente'];
    list($producto, $precio) = explode ('|',$_POST['producto']);
$cantidad = $_POST['cantidad'];

$dni = $_POST['dni'];

$monto = $cantidad * $precio;

$monto_soles = ($precio * 3.75);

$fecha = $_POST['fecha'];

if ($monto < 100) {
    $desc = 0.02;
} else if ($monto >= 100 && $monto <= 500) {
    $desc = 0.04;
} else if ($monto >= 501 && $monto <= 1000){
    $desc = 0.06;
} else if ($monto >= 1001 && $monto <= 1500) {
    $desc = 0.8;
} else if ($monto >= 1500) {
    $desc = 0.20;
}

$dsctoPorcen = ($desc * 100);

$montoDesc = $monto_soles - ($monto_soles * $desc);
$igv = $montoDesc * 0.18;
$neto = $montoDesc + $igv;

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial', 'U', 14);

$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(0, 10, 'Boleta de venta', 0, 1, 'C');

// Argumentos: ancho, altura, texto, 0 = borde, 1 = con borde, 'C' = alineacion

$pdf -> SetFont('Arial', 'B', 14);
$pdf -> Cell(0, 10, "Cliente: $cliente", 0, 1, 'L');
$pdf -> Cell(0, 10, "DNI: $dni", 0, 1, 'L');
$pdf -> Cell(0, 10, "producto: $producto", 0, 1, 'L');
$pdf -> Cell(0, 10, "cantidad: $cantidad", 0, 1, 'L');
$pdf -> Cell(0, 10, "precio: $precio", 0, 1, 'L');
$pdf -> Cell(0, 10, "fecha: $fecha", 0, 1, 'L');

// PASO 4: Diseñamos el  encabezado
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> setTextColor(255, 255, 255);
$pdf -> Cell(60, 10, "Concepto", 1, 0, 'C', true);
$pdf -> Cell(40, 10, "Detalle", 1, 0, 'C', true);
$pdf -> Cell(60, 10, "Monto", 1, 1, 'C', true);



// PASO 5: Diseañamos el cuerpo de la tabla

$pdf -> setTextColor(0, 0, 0);

$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Precio por unidad", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(40, 10, "$cantidad unidades", 1, 0, 'L');
$pdf -> Cell(60, 10, "$$precio Dolares", 1, 1, 'L');

$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Monto en Soles", 1, 0, 'L');
$pdf -> Cell(40, 10, "$monto_soles", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "S/$monto_soles ", 1, 1, 'L');

$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Descuento", 1, 0, 'L');
$pdf -> Cell(40, 10, "$dsctoPorcen", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "", 1, 1, 'L');


$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Monto con Descuento", 1, 0, 'L');
$pdf -> Cell(40, 10, "", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "S/$montoDesc", 1, 1, 'L');

$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "IGV", 1, 0, 'L');
$pdf -> Cell(40, 10, "18%", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10,  "", 1, 1, 'L');


$pdf -> Cell(60, 10, "Monto en soles", 1, 0, 'L');
$pdf -> Cell(40, 10, "", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10,  "S/".number_format($monto * 3.75), 1, 1, 'L');

// PASO 6: Generamos pdf

$pdf -> Output("D",'Boleta_de_venta.pdf');
?>

