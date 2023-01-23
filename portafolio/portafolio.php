<html>
  <head>

  </head>
  <body>
    
    <?php require("cabecera.php"); ?>

    <?php include("conexion.php"); ?>

    <?php 

        $ObjConexion = new conexion();

        $sql = "SELECT * FROM proyectos;";

        $resultado = $ObjConexion->consultar($sql);
      
    ?>

    <?php

      if($_POST){

        $nombre = $_POST["nombre"];
        
        $imagen = $_FILES["imagen"]["name"];
        
        #print_r($_FILES["imagen"][""]);

        $ObjConexion = new conexion();

        move_uploaded_file($_FILES["imagen"]["tmp_name"],$_FILES["imagen"]["name"]);

        $sql = "INSERT INTO proyectos VALUES (NULL,'$nombre','$imagen');";

        $ObjConexion->ejecutar($sql);
        
        $sql = "SELECT * FROM proyectos;";

        $resultado = $ObjConexion->consultar($sql);

      }

      if($_GET){

        $ObjConexion = new conexion();

        $sql = "DELETE FROM proyectos WHERE id =".$_GET["borrar"];

        $ObjConexion->ejecutar($sql);

        $sql = "SELECT * FROM proyectos;";

        $resultado = $ObjConexion->consultar($sql);
         
      }

    ?>

    <div class="container">

      <form action="portafolio.php" method="POST" enctype="multipart/form-data">

        Nombre del proyecto: <input class="form-control" type="text" name="nombre"/><br/>

        Imagen del proyecto: <input class="form-control" type="file" name="imagen"/>

        <br/><input class="btn-success" type="submit" value="Enviar"/>

      </form>


      <table class="table">

       <thead>
        
         <th>ID</th>

         <th>Nombre</th>

         <th>Imagen</th>

         <th>Opciones</th>

       </thead>

       <tbody>

<?php

       foreach($resultado as $i){

?>
         <tr>

           <td>
          
            <?php echo $i["id"] ?>

           </td>

           <td>

            <?php echo $i["nombre"] ?>

           </td>

            <td>

              <img src="<?php echo $i["imagen"] ?>"/>

           </td>
            
          <td>

            <a name="borrar" id="" class="btn btn-danger" role="button" href="?borrar=<?php echo $i["id"] ?>">Eliminar</a>

           </td>

         </tr>

<?php 

        }

?>

       </tbody>

     </table>
      
    </div>
    
    <?php require("pie.php"); ?>
    
  </body>

</html>

