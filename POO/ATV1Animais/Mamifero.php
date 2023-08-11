<?php

class Mamifero extends Animal {

    var $pelos;

    function __construct($nome, $idade, $pelos) {
        parent::__construct($nome, $idade);
        $this->pelos = $pelos;
    }

    function amamentar(){
        return "O Mamifero amamenta!";
    }

    public function emitirSom(){
        echo "Muuu";
    }

}





?>