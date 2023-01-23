<?php

$txtNombre = "";

$genero = "";

$checkboxphp = "";

$checkboxjava = "";

$checkboxpython = "";

if($_POST){

  $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
  
  $genero = (isset($_POST["genero"]))?$_POST["genero"]:"";
  
  $checkboxphp = (isset($_POST["checkboxphp"])=="si")?"checked":"";

  $checkboxjava = (isset($_POST["checkboxjava"])=="si")?"checked":"";

  $checkboxpython = (isset($_POST["checkboxpython"])=="si")?"checked":"";

}

?>

<html>

  <head></head>

  <body>

  <?php

    if($_POST){

  ?>

  <p><?php echo "Hola ".$txtNombre ?></p><br/>

  <p><?php echo "Tu genero es: ".$genero ?></p><br/>

  <?php

    }

  ?>

    <form action="ejercicio31.php" method="POST">

      <input type="text" name="txtNombre" id="" value="<?php echo $txtNombre ?>">

      <p>Hombre o Mujer?:</p>

      <br/> Hombre : <input <?php echo ($genero=="Hombre")?"checked":"" ?> type="radio" name="genero" value="Hombre"><br/>

      <br/> Mujer : <input <?php echo ($genero=="Mujer")?"checked":"" ?> type="radio" name="genero" value="Mujer"><br/>

      <h4>Te gusta:</h4>

      <br/> php : <input <?php echo $checkboxphp ?> type="checkbox" name="checkboxphp" value="si"><br/>

      <br/> java : <input <?php echo $checkboxjava ?> type="checkbox" name="checkboxjava" value="si"><br/>

      <br/> python : <input <?php echo $checkboxpython ?> type="checkbox" name="checkboxpython" value="si"><br/>

      <input type="submit" value="enviar info">

    </form>

  </body>

</html>

