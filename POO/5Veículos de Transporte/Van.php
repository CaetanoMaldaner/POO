<?php

class Van extends Automovel {

var $carga;

function __construct($marca, $modelo, $ano, $cor, $preco, $carga) {
    parent::__construct($marca, $modelo, $ano, $cor, $preco);
    $this->carga = $carga;
}

function detalhes() {
    return parent::detalhes() . ", Máximo de Pessoas: " . $this->carga;
}

}