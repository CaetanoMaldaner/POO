<?php

class Item{

    public $titulo;
    public $autor;

function __construct($titulo, $autor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
}

function detalhes() {
    return "Título: " . $this->titulo . ", Autor: " . $this->autor;
}

}

?>