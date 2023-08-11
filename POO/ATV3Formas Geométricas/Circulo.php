<?php

class Circulo extends Forma{
    //atributo
    private $raio;

    //metodo
    public function __construct($raio){
        $this->raio = $raio;
    }

    public function area(){
        return pi() * pow($this->raio, 2);
    }

    public function perimetro(){
        return 2 * pi() * $this->raio;
    }


}

?>