<?php

class Triangulo extends Forma {
    private $lado; 


    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function area(){
        //raiz quadrada de 3 sobre quatro vezes a quantidade de lados na potencia 2
        return (sqrt(3) / 4) * pow($this->lado, 2);
    }

    public function perimetro(){
        return 3 * $this->lado;
    }

}


?>