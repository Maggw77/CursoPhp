<?php
namespace escuelas;

class escuela {
public $name;
public $direccion;
public $tipe;


public function __construct($name,$direccion,$tipe)
{
    $this->name=$name;
    $this->direccion=$direccion;
    $this->tipe=$tipe;

}


public function getescuela(){

return "Los datos de la escuela son: ". $this->name . " " . $this->direccion . " ". $this->tipe;
}

}


?>