<?php

$jsonContenido = '[{"nombre":"loscar"},{"nombre":"albert"}]';

$resultado = json_decode($jsonContenido);

foreach($resultado as $r){

  print_r($r->nombre);

}

?>
