
<?php 
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    //fASE DE ENTRADA
    $nombre= $_POST['nombre'];
    $horas= $_POST['horas'];
    $tarifaHoras= $_POST['tarifaHoras'];


    //fASE DE PROCESO
    $salarioBruto = $horas * $tarifaHoras;
    $impuesto= $salarioBruto *0.10;
    $salarioNeto= $salarioBruto -$impuesto;

    //FASE SALIDA
    echo "<h1> Boleta de pago</h1>";
    echo "El nombre del empleado es ". $nombre . "<br>";
    echo "Las horas trabajadas son ". $horas. "<br>";
    echo "Tarifa por hora son " . $tarifaHoras . "<br>";
    echo "Salario Bruto: ". $salarioBruto . "<br>";
    echo "Impuesto: ". $impuesto . "<br>";
    echo "Salario Neto:  ". $salarioNeto;

}
?>