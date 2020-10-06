<?php



if (isset($_POST['submit'])) {
  $nombre = $_POST['Nombre'];
  $apellido = $_POST['Apellido'];
  $correoDe = $_POST['Correo'];
  $empresa = $_POST['Empresa'];
  $mensaje = $_POST['Mensaje'];

  $correoA = "prueba@legalizarlacorrupcion.com.mx";
  $headers = "Mensaje de: ".$correoDe;
  $txt = "Has recibido un mensaje de ".$nombre.".\n\n"$mensaje;

  mail($correoA, $txt, $headers);
  header("Location: index.php?mailsend")
}

