<?php

class RelatorioVendas extends Relatorio{

    public function gerarCabecalho(){
        echo "Gerou um Cabeçalho para o Relatório de Vendas!";
    }
    public function gerarCorpo(){
        echo "Gerou um Corpo para o Relatório de Vendas!";
    }
    public function gerarRodape(){
        echo "Gerou um Rodapé para o Relatório de Vendas!";
    }

}