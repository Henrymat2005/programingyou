<?php 
  $destino = "henrymateo2005@gmail.com";
  $nombre = $_POST["nombre"];
  $asunto = $_POST["asunto"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["mensaje"];
  
  &header = "Enviado desde Programing You";
  mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
  mail($destino, $asunto, $mensaje, $header);
  echo "<script>alert('Correo enviado Existosamente')</script>";
  echo "<script>setTimeout(\"Location.href='index.html'\",1000)</script>";
?>
