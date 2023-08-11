<?php

include "Relatorio.php";
include "RelatorioEstoque.php";
include "RelatorioFinanceiro.php";
include "RelatorioVendas.php";


$RelatorioVendas = new RelatorioVendas();
$RelatorioFinanceiro = new RelatorioFinanceiro();
$RelatorioEstoque = new RelatorioEstoque();


echo $RelatorioVendas->gerarCabecalho() . "<br>";
echo $RelatorioVendas->gerarCorpo() . "<br>";
echo $RelatorioVendas->gerarRodape() . "<br><br>";

echo $RelatorioFinanceiro->gerarCabecalho() . "<br>";
echo $RelatorioFinanceiro->gerarCorpo() . "<br>";
echo $RelatorioFinanceiro->gerarRodape() . "<br><br>";

echo $RelatorioEstoque->gerarCabecalho() . "<br>";
echo $RelatorioEstoque->gerarCorpo() . "<br>";
echo $RelatorioEstoque->gerarRodape() . "<br><br>";

