<?php

class Moto extends Automovel {

var $cilindrada;

function __construct($marca, $modelo, $ano, $cor, $preco, $cilindrada) {
    parent::__construct($marca, $modelo, $ano, $cor, $preco);
    $this->cilindrada = $cilindrada;
}

function detalhes() {
    return parent::detalhes() . ", Cilindradas: " . $this->cilindrada;
}
    
}