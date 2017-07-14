<?php
	$destino= "carlosarriagacm@gmail.com";
	$nombre= $_POST["nombre"];
	$correo= $_POST["correo"];
	$mensaje= $_POST["mensaje"];
	$contenido= "Nombre= " . $nombre . "\nCorreo= " . $correo . "\nMensaje= " . $mensaje;
	mail($destino, "Mail de la Web", $contenido);
?>
