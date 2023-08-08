<?php

class Automovel {

    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $preco;

function __construct($marca, $modelo, $ano, $cor, $preco) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->cor = $cor;
    $this->preco = $preco;
}

public function detalhes() {
    return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Ano: " . $this->ano . ", Cor: " . $this->cor . ", Preço: " . $this->preco;
}

}