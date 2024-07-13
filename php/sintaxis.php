<?php 
$nombre= "Piero";
$distrito= "Surco";

echo "Su nombre es: ". $nombre . " vive en " . $distrito ."<br>";
echo "Su nombre es: $nombre y vive en $distrito";

//Para declarar constantes utilizamos el comando define
define("EDAD", 20);
echo "Su nombre es: $nombre , vive en $distrito y tiene ". EDAD;
?>