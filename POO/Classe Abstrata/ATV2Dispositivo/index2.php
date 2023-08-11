<?php

include "Dispositivo.php";
include "Computador.php";
include "Televisao.php";
include "Smartphone.php";


$Smartphone = new Smartphone("Xiaomi", "Redmi");
$Televisao = new Televisao("Samsung", "SmartTV");
$Computador = new Computador("Positivo", "Positivo01");


echo "A marca do seu dispositivo é: " . $Computador->marca . "<br>";
echo "O modelo do seu dispositivo é: " . $Computador->modelo . "<br>";
echo $Computador->ligar() . "<br><br>";

echo "A marca do seu dispositivo é: " . $Televisao->marca . "<br>";
echo "O modelo do seu dispositivo é: " . $Televisao->modelo . "<br>";
echo $Televisao->ligar() . "<br><br>";

echo "A marca do seu dispositivo é: " . $Smartphone->marca . "<br>";
echo "O modelo do seu dispositivo é: " . $Smartphone->modelo . "<br>";
echo $Smartphone->ligar() . "<br><br>";

