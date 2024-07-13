<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kilometros = $_POST['kilometros'];
        $litros = $_POST['litros'];

        if ($kilometros > 0 && $litros > 0) {
            $consumoPorKilometro = $litros / $kilometros;
            echo "<p>El consumo de combustible por kilómetro es: " . number_format($consumoPorKilometro, 2) . " litros/km</p>";
        } else {
            echo "<p>Por favor, ingrese valores mayores a cero.</p>";
        }
        
    }
    ?>