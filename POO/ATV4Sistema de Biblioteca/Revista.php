<?php


class Revista extends Item{

var $edicao;

function __construct($titulo, $autor, $edicao) {
    parent::__construct($titulo, $autor);
    $this->edicao = $edicao;
}

function detalhes() {
    return parent::detalhes() . ", Edição: " . $this->edicao;
}
}

?>