<?php

class Onibus extends Automovel{

var $assentos;

function __construct($marca, $modelo, $ano, $cor, $preco, $assentos) {
    parent::__construct($marca, $modelo, $ano, $cor, $preco);
    $this->assentos = $assentos;
}

function detalhes() {
    return parent::detalhes() . ", Número de Assentos: " . $this->assentos;
}

}

