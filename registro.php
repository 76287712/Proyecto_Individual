<?php
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    #PASO-1 : Declaración de variables
    $nombres= $_POST['nombres'];
    $dni= $_POST['dni'];
    $direc= $_POST['direc'];
    $residencia= $_POST['resid'];
    $correo= $_POST['correo'];
    $celular= $_POST['celuAp'];
    $celular= $_POST['celuAl'];
    $usuario= $_POST['nomUsu'];
   # $terminos= $_POST['terminos'];

    #PASO-2 : Indicamos el destinatario
    $destinatario= 'rachel11072003@gmail.com';

    #PASO-3 : Indicamos con que asunto llegará el mensaje
    $asunto= 'Primera prueba en PHP ✔';

    #PASO-4 : Diseñamos el mensaje
     
    $cuerpo= 'Nombres: ' . $nombres .'\n';
    $cuerpo .='Dni: ' . $dni .'\n';
    $cuerpo .='Dirección: ' . $direc .'\n';
    $cuerpo .='Residencia: ' . $residencia .'\n';
    $cuerpo .='Correo: ' . $correo .'\n';
    $cuerpo .='Celular: ' . $celular .'\n';
    $cuerpo .='Usuario: ' . $usuario .'\n';
    $cuerpo .='Contrasena: ' . $contrasena .'\n';

    #PASO-5 : Programamos el envio al servidor de correo

    if(mail($destinatario, $asunto, $cuerpo)){
        echo "Se ha enviado exitosamente tu solicitud";
    }else{
        echo "El correo no se envio 😔";
    };

    
}

?>