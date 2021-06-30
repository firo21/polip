<?php
    $destinatario="polip.060996@gmail.com";
    $nombre=$_POST["nombre"];
    $correo=$_POST["email"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["areatxt"];
    /*Concatenar*/
    $contenido="Nombre: " . $nombre . "\nCorreo: ". $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
    /*Procedemos a enviar el mensaje 
    1. el correo, 2. el asunto, 3. la información enviar*/
    mail($destinatario,"Mensaje de Cliente",$contenido);
    header("Location: ../index.html");
?>