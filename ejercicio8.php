<?php
if($_POST){
  $valorA = $_POST['valorA'];
  $valorB = $_POST['valorB'];
  $suma = $valorA+$valorB;
  $resta = $valorA-$valorB;
  $multiplicacion = $valorA*$valorB;
  $division = $valorA/$valorB;
  echo "Suma ".$suma."<br/>";
  echo "Resta ".$resta."<br/>";
  echo "Multiplicacion ".$multiplicacion."<br/>";
  echo "division ".$division;
}
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form action="ejercicio8.php" method="POST">
      Valor A:
      <input type="text" name="valorA">
      <br/>
      Valor B:
      <input type="text" name="valorB">
      <input type="submit" name="Calcular"> 
      <br/>
    </form>
  </body>
</html>
