<?php

// Importamos o traemos el archivo pdf
require ('fpdf/fpdf.php');

// capturar los input dl html es una variable

$cliente = $_POST['cliente'];
    list($producto, $precio) = explode ('|',$_POST['producto']);
$cantidad = $_POST['cantidad'];

// capturaramo operacion

$monto = $cantidad * $precio;

// calculamos los descuentos

if ($monto < 400) {
    $desc = 0.03;
} else if ($monto >= 400 && $monto <= 700) {
    $desc = 0.06;
} else if ($monto <= 1000){
    $desc = 0.09;
} else if ($monto <= 1400) {
    $desc = 0.12;
} else {
    $desc = 0.15;
}

// Ultimas condiciones de operacion

$montoDesc = $monto - ($monto * $desc);
$igv = $montoDesc * 0.18;
$neto = $montoDesc + $desc;

$igv = $monto * 0.18;

// Empezamos a usar la libreria fpdf
// PASO 1: Creacion de pdf
$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial', 'U', 14);

// PAS0 2: Diseñamos titulo de la pagina PDF

$pdf -> Cell(0, 10, 'Boleta de venta', 0, 1, 'C');

// Argumentos: ancho, altura, texto, 0 = borde, 1 = con borde, 'C' = alineacion

// PASO 3: Capturamos los datos de entrada

$pdf -> SetFont('Arial', 'B', 14);
$pdf -> Cell(0, 10, "Cliente: $cliente", 0, 1, 'L');
$pdf -> Cell(0, 10, "Producto: $producto", 0, 1, 'L');
$pdf -> Cell(0, 10, "Cantidad: $cantidad", 0, 2, 'L');

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
$pdf -> Cell(60, 10, "S/$precio Soles", 1, 1, 'L');

$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Monto", 1, 0, 'L');
$pdf -> Cell(40, 10, "Sin detalles", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "S/$monto ", 1, 1, 'L');


$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Descuento", 1, 0, 'L');
$desc = intval($desc * 100); // Multiplicamos por 100 y luego convertimos a ent
$pdf -> Cell(40, 10, "$desc%", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "S/".number_format($monto - $montoDesc), 1, 1, 'L');


$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Monto con Descuento", 1, 0, 'L');
$pdf -> Cell(40, 10, "$desc%", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "S/$montoDesc", 1, 1, 'L');


$neto = $montoDesc + $igv;
$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "IGV", 1, 0, 'L');
$pdf -> Cell(40, 10, "18%", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "S/".number_format($igv), 1, 1, 'L');


$pdf -> SetFont('Arial', '', 16);
$pdf -> Cell(60, 10, "Total Neto", 1, 0, 'L');
$pdf -> Cell(40, 10, "Sin detalles", 1, 0, 'L');
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(60, 10, "S/".number_format($neto), 1, 1, 'L');


// PASO 6: Generamos pdf

$pdf -> Output("D",'Boleta_de_venta.pdf');
?>