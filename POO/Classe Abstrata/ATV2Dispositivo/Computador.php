<?php

class Computador extends Dispositivo{

    function __construct($marca, $modelo) {
        parent::__construct($marca, $modelo);
    }
    
    public function ligar(){
        echo "Computador Ligou!";
    }
}