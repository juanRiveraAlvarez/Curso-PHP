<?php

class persona{

  private $nombre;
  
  function __construct($nombre){

    $this->nombre=$nombre;   

  }
  
  public function setNombre($nombre){

    $this->nombre=$nombre;

  }

  public function getNombre(){
  
    return $this->nombre; 
  
  }

}

$persona1 = new persona("Albert");

$persona1->setNombre("juan");

echo "Nombre: ".$persona1->getNombre()."<br/>";

class trabajador extends persona{

  private $dni;

  public function setDni($dni){

    $this->dni=$dni;

  }

  public function getDni(){
  
    return $this->dni; 
  
  }

  public static function saludar(){

    echo "Hola soy un metodo estatico"."<br/>"; 
  
  }

}

$trabajador1 = new trabajador("Fredo");

$trabajador1->setDni("1011");

$trabajador1->saludar();

echo "Nombre: ".$trabajador1->getNombre()."<br/>";

echo "Dni: ".$trabajador1->getDni()."<br/>";

trabajador::saludar();

?>
