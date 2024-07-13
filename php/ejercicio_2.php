<?php 
//Fase de entrada: declaracion de variables y preguntas.
$producto= "Zapatilla Nike";
$precio= 399.90;
$descuento= 0.05;
$igv= 0.18;

//Fase de proceso: Realizamos los calculos o condiciones.

$precioIgv= $precio * $igv;
$precioFinal= $precioIgv+ $precio;
$precioDescuento= $precio * $descuento;
$totalNeto=  $precio + $precioIgv -$precioDescuento;

//Fase de salida: imprimimos en pantalla
echo "El precio del producto es : ". $precioIgv . "<br>";
echo  "".number_format($precioFinal, 2) . "<br>";
echo "El  descuento es " . $precioDescuento . "<br>";
echo "El total neto a pagar: ". $totalNeto . "<br>";

?>