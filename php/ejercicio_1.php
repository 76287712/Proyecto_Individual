<?php 
//Declaramos variables fijas;
$totalVarones=255;
$totalMujeres= 184;

//Calculamos el total porcentual de varones y mujeres (Proceso)
$total= $totalMujeres + $totalVarones;
$porcentajeVarones= round(($totalVarones / $total)*100);
$porcentajeMujeres= round(($totalMujeres / $total)*100);

//Imprimimos la salida
echo "<h1>El porcentaje de hombres es: $porcentajeVarones %</h1> "."<br>";
echo "<h1>El porcentaje de mujeres es: $porcentajeMujeres %</h1> "."<br>";
echo "El porcentaje de hombres es: ". number_format($porcentajeVarones, 2) . "<br>";
?>