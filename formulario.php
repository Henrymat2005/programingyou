<?php 
  $destino = "henrymateo2005@gmail.com";
  $nombre = $_POST["nombre"];
  $asunto = $_POST["asunto"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["mensaje"];
  
  $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
  mail($destino, $asunto, $mensaje);
  echo "<script>alert('Correo enviado Existosamente')</script>";
  echo "<script>setTimeout(\"Location.href='index.html'\",1000)</script>";
?>
