<?php

class TransferenciaBancaria extends MetodoPagamento{

    public function autorizarTransacao(){
        echo "Transação Autorizada para a Transferencia Bancaria!";
    }
    public function processarPagamento(){
        echo "Pagamento Processado para a Transferencia Bancaria!";
    }

}