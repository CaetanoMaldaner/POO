<?php

class Animal {

    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function comer() {}
    function caminhar() {}

}




?>