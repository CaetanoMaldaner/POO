<?php 

abstract class Relatorio{

    abstract public function gerarCabecalho();
    abstract public function gerarCorpo();
    abstract public function gerarRodape();
    
}