<?php

class RelatorioFinanceiro extends Relatorio{

    public function gerarCabecalho(){
        echo "Gerou um Cabeçalho para o Relatório Financeiro!";
    }
    public function gerarCorpo(){
        echo "Gerou um Corpo para o Relatório Financeiro!";
    }
    public function gerarRodape(){
        echo "Gerou um Rodapé para o Relatório Financeiro!";
    }

}