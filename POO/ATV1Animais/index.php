<?php

include "Animal.php";
include "Ave.php";
include "Reptil.php";
include "Mamifero.php";

//Criação de OBJETOS
$mamifero = new Mamifero("Macaco", 10, "Possuí Pelo");
$ave = new Ave("Pombo", 2, "Possuí Penas");
$reptil = new Reptil("Lagarto", 3, "Possuí Escama");


//Mostrando esses objetos
//MAMIFERO
echo "Nome do mamífero: " . $mamifero->nome . "<br>";
echo "Idade do mamífero: " . $mamifero->idade . " anos<br>";
echo $mamifero->amamentar() . "<br>";
echo $mamifero->emitirSom() . "<br><br>";

//AVE
echo "Nome da ave: " . $ave->nome . "<br>";
echo "Idade da ave: " . $ave->idade . " anos<br>";
echo $ave->voar() . "<br>";
echo $ave->emitirSom() . "<br><br>";

//REPTIL
echo "Nome do réptil: " . $reptil->nome . "<br>";
echo "Idade do réptil: " . $reptil->idade . " anos<br>";
echo $reptil->rastejar() . "<br>";
echo $reptil->emitirSom() . "<br><br>";



?>