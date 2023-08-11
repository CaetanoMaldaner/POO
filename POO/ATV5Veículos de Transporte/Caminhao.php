<?php

class Caminhao extends Automovel {

var $eixos;

function __construct($marca, $modelo, $ano, $cor, $preco, $eixos) {
    parent::__construct($marca, $modelo, $ano, $cor, $preco);
    $this->eixos = $eixos;
}

function detalhes() {
    return parent::detalhes() . ", Número de Eixos: " . $this->eixos;
}

}