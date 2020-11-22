<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    //aqui iria su correo 
    $to = "feliperiveros047@gmail.com";
    //el subjet es el asunto 
    $subject = "LOSMACANUDOS WEB";
    //este es el cuerpo del mensaje
    $message = "¡Gracias por suscribirte ahora eres parte de los MACANUDOS!";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>