<?php
    //Recepcion de datos del formulario
    $nombre = $_POST['nombre']; 
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto']; 
    $mensaje = $_POST['mensaje'];
    $texto_mensaje = 'El usuario ' . $nombre . ' con correo ' . $correo .  ' te dijo ' . $mensaje; 
    mail("maverick.brm@gmail.com", $asunto, $texto_mensaje); 
    echo "Se envio el correo";

?>