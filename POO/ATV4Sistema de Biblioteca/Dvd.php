<?php


class Dvd extends Item{

var $duracao;

function __construct($titulo, $autor, $duracao) {
    parent::__construct($titulo, $autor);

    $this->duracao = $duracao;
}

function detalhes() {
    return parent::detalhes() . ", Duração: " . $this->duracao . " minutos";
}

}

?>