<?php

abstract class MetodoPagamento{

    abstract public function autorizarTransacao();
    abstract public function processarPagamento();

}