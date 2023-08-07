<?php
include "Animal.php";


class Reptil extends Animal {

    var $escamas;

    function __construct($nome, $idade, $escamas) {
        parent::__construct($nome, $idade);
        $this->escamas = $escamas;
    }

    function rastejar() {
        return "O Reptil rasteja!";
    }

}



?>