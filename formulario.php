<?php 
//Estado inicial de variables
$mensaje_enviado = false;
$nameErr = $emailErr = $telefonoErr = $mensajeErr = "";
$nombreUsuario = $correo = $telefono = $asuntoMensaje = $mensaje = "";

//Funcion POST formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    //Asignacion de variables
    $nombreUsuario = $_POST['nombre'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asuntoMensaje = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $to = "destinatario@ejemplo.com";
    $body = "";

    $body .= "From: ".$nombreUsuario. "\r\n";
    $body .= "Email: ".$correo. "\r\n";
    $body .= "Mensaje: ".$mensaje. "\r\n";

    mail($to, $asuntoMensaje, $body);

    //Validacion de correo electronico
    if(!$_POST['email']) {
        $emailErr = "Escribe tu correo electronico.";
        $mensaje_enviado = false;
    }  else if  (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Correo electronico invalido.";
        $mensaje_enviado = false;
        $correo = "";
    }

    //si el nombre esta vacio muestra error
    if(!$_POST['nombre']) {
        $nameErr = "Escribe tu nombre completo.";
        $mensaje_enviado = false;
    } 

    //si el telefono esta vacio muestra error
    if(!$_POST['telefono']) {
        $telefonoErr = "Escribe tu telefono.";
        $mensaje_enviado = false;
    }  else if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $telefono)) {
         //Validacion de numero de telefono
        $telefonoErr = "Telefono invalido.";
        $mensaje_enviado = false;
    }
  

    //Si el mensaje esta vacio muestra error
    if(!$_POST['mensaje']) {
        filter_var($correo, FILTER_VALIDATE_EMAIL);
        $mensajeErr = "Escribe un mensaje.";
        $mensaje_enviado = false;
    } 


    $mensaje_enviado = true;
    
}
?>

