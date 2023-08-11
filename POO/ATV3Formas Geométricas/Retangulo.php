<?php

class Retangulo extends Forma {

    private $largura, $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function area(){
        return $this->largura * $this->altura;
    }

    public function perimetro()
    {
        return 2 * ($this-> largura * $this->altura);
    }

}


?>