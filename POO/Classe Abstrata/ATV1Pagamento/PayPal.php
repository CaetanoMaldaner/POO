<?php

class PayPal extends MetodoPagamento{

    public function autorizarTransacao(){
        echo "Transação Autorizada para o Paypal!";
    }
    public function processarPagamento(){
        echo "Pagamento Processado para o Paypal!";
    }

}