<?php


class Livro extends Item{

var $paginas;

function __construct($titulo, $autor, $paginas) {
    parent::__construct($titulo, $autor);

     $this->paginas = $paginas;
}

function detalhes() {
    return parent::detalhes() . ", Páginas: " . $this->paginas;
}


}

?>