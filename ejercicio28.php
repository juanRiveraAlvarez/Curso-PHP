<?php

$servidor="localhost";

$usuario="root";

$contrasena="";

try{

  $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasena);

  $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  $sql = "INSERT INTO fotos VALUES (NULL,'Jugando con la programacion','foto.jpg');";

  $conexion->exec($sql);

  $sql = "SELECT * FROM fotos;";

  $sentencia = $conexion->prepare($sql);

  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  foreach($resultado as $foto){

    print_r($foto['nombre']); 

  }

  echo "Conexion establecida";

}catch(PDOException $error){

  echo "Conexion erronea ".$error;

}

?>
