<?php

class CartaoCredito extends MetodoPagamento{

    public function autorizarTransacao(){
        echo "Transação Autorizada para o Cartão de Crédito!";
    }
    public function processarPagamento(){
        echo "Pagamento Processado para o Cartão de Crédito!";
    }

}