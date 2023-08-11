<?php

abstract class Dispositivo{

    public $marca;
    public $modelo;

    abstract public function ligar();

    function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
}