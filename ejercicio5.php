<?php
if($_POST){
  $nombre = $_POST['txtNombre'];
  $apellido = $_POST['txtApellido'];
  echo "Hola ".$nombre.$apellido;
}
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form action="ejercicio5.php" method="POST">
      Nombre:
      <input type="text" name="txtNombre">
      <br/>
      Apellido:
      <input type="text" name="txtApellido">
      <input type="submit" name="enviar"> 
      <br/>
    </form>
  </body>
</html>
