<?php

$nombreArchivo = "archivo.txt";

$contenidoArchivo = "Hola mundo";

$archivoCrear = fopen($nombreArchivo,"w");

fwrite($archivoCrear,$contenidoArchivo);

fclose($archivoCrear);

?>

