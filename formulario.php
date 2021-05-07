<?php 
  $destino = "contact@programingyou.com";
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];
  $contenido = "nombre: " . $nombre . "/nCorreo: " . $correo . "/nTelefono: " . $telefono . "/nMensaje: " . $mensaje;
  mail($destino, "Contacto a Programingyou", $contenido);
  echo "<script>alert('Correo enviado Existosamente')</script>";
  echo "<script>setTimeout(\"Location.href='index.html'\",1000)</script>";
?>