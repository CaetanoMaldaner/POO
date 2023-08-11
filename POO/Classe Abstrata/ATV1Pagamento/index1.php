<?php

include "MetodoPagamento.php";
include "PayPal.php";
include "TransferenciaBancaria.php";
include "CartaoCredito.php";


$PayPal = new PayPal();
$TransferenciaBancaria = new TransferenciaBancaria();
$CartaoCredito = new CartaoCredito();


echo $PayPal->autorizarTransacao() . "<br>";
echo $PayPal->processarPagamento() . "<br><br>";

echo $TransferenciaBancaria->autorizarTransacao() . "<br>";
echo $TransferenciaBancaria->processarPagamento() . "<br><br>";

echo $CartaoCredito->autorizarTransacao() . "<br>";
echo $CartaoCredito->processarPagamento() . "<br><br>";

