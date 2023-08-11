<?php

class RelatorioEstoque extends Relatorio{

    public function gerarCabecalho(){
        echo "Gerou um Cabeçalho para o Relatório de Estoque!";
    }
    public function gerarCorpo(){
        echo "Gerou um Corpo para o Relatório de Estoque!";
    }
    public function gerarRodape(){
        echo "Gerou um Rodapé para o Relatório de Estoque!";
    }

}