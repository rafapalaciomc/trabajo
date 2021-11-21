<?php

$emailuser = "rafapalacio@gmail.com";
 
$cabecera  = "MIME-Version: 1.0"."\r\n";
$cabecera .= "Content-type: text/html; charset=UTF-8"."\r\n";
 
$email  = htmlentities($_POST["email"]);
$nombre = htmlentities($_POST["nombre"]);
$messageuser = htmlentities($_POST["asunto"]);
$desc = str_replace("\n", "<br>", $_POST["descripcion"]);
$respuesta = $_POST["res"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$respuesta1 = $n1+$n2;
 

echo $email  . '<br>';
echo $nombre . '<br>';
echo $messageuser. '<br>';
echo $desc. '<br>';
echo $respuesta. '<br>';

if ($email == null || $nombre == null || $messageuser == null || $desc == null || $respuesta == null) {	
	die("Error, todos los campos deben estar rellenos");
}
 
if ($respuesta != $respuesta1) {	
	die("Error, la comprobación Anti-spam a fallado.");
}
if (mail($emailuser, $messageuser, "<b>Nombre</b>: ".$nombre."<br><b>Correo</b>: ".$email."<br><b>Problema</b>: ".$desc, $cabecera)) {	
	die($nombre.", El email se ha enviado correctamente.");
}
echo "Error, no se ha podido enviar el correo, inténtelo más tarde.";