<?php

if($_POST){

  print_r($_POST);

  print_r($_FILES['archivo']['name']);

  move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);

}

?>

<html>

  <head>

  </head>

  <body>

    <form action="ejercicio32.php" enctype="multipart/form-data" method="POST">

      Imagen:

      <input type="file" name="archivo"/><br/>

      <input type="submit" name="enviar" value="enviar informacion"/>

    </form>

  </body>

</html>

