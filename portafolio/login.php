<?php

if($_POST){

  if($_POST["usuario"] == "Juan" && $_POST["contrasena"] == "12345"){

    session_start();

    $_SESSION["usuario"] = $_POST["usuario"];

    header("location:index.php");
  
  }else{
  
    echo "<script>alert('Usuario o contraseña incorrecta')</script>";
  
  } 

}

?>


<html>

  <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">

      <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">

          <form action="login.php" method="POST">

            Usuario:<input type="text" name="usuario" class="form-control"><br/>

            Contraseña:<input type="password" name="contrasena" class="form-control"><br/>

            <input type="submit" value="Entrar" class="btn btn-success">

          </form>

        </div>

        <div class="col-md-4">

        </div>

      </div>

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>

</html>
