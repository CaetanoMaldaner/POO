<?php

class Carro extends Automovel {

var $portas;

function __construct($marca, $modelo, $ano, $cor, $preco, $portas) {
    parent::__construct($marca, $modelo, $ano, $cor, $preco);
    $this->portas = $portas;
}    

function detalhes() {
    return parent::detalhes() . ", Número de Portas: " . $this->portas;
}

}