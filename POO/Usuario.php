<?php


class Usuario {

var $nome;
var $email;

function __construct($nome, $email) {
    $this->nome = $nome;
    $this->email = $email;
}

//Criação dos GETTERS , para poder "puxar" as informações do NOME e do EMAIL
function getNome() {
    return $this->nome;
}

function getEmail() {
    return $this->email;
}

}


?>