<?php

include "Automovel.php";
include "Carro.php";
include "Moto.php";
include "Caminhao.php";
include "Onibus.php";
include "Van.php";

//Criação dos OBJETOS
$carro = new Carro("Chevrolet", "Cruze", 2022, "Prata", 80000, 4);
$moto = new Moto("Honda", "CB500F", 2021, "Vermelha", 25000, 500);
$onibus = new Onibus("Mercedes-Benz", "OF-1721", 2019, "Branco", 200000, 40);
$van = new Van("Ford", "Transit", 2020, "Azul", 60000, 8);
$caminhao = new Caminhao("Volvo", "FH 540", 2023, "Preto", 400000, 4);


//Mostrando os Dados 

//Carro
echo $carro->detalhes() . "<br><br>";
//Moto
echo $moto->detalhes() . "<br><br>";
//Onibus
echo $onibus->detalhes() . "<br><br>";
//Van
echo $van->detalhes() . "<br><br>";
//Caminhao
echo $caminhao->detalhes() . "<br><br>";
?>