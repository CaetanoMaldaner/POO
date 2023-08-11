<?php

include "Usuario.php";
include "Administrador.php";
include "Gerente.php";
include "Cliente.php";

//Criando os OBJETOS
$administrador = new Administrador("CristianADM", "CristianADM@gmail.com");
$gerente = new Gerente("Guilherme", "guilhermegerente@gmail.com");
$cliente = new Cliente("Caetano Maldaner", "caetano@gmail.com");


//MOSTRANDO as informações

//ADM
echo "Nome do administrador: " . $administrador->getNome() . "<br>";
echo "Email do administrador: " . $administrador->getEmail() . "<br>";
echo $administrador->cadastro("Thiago", "thiago@gmail.com") . "<br><br>";


//GERENTE
echo "Nome do gerente: " . $gerente->getNome() . "<br>";
echo "Email do gerente: " . $gerente->getEmail() . "<br>";
echo $gerente->demitir($administrador) . "<br><br>";


//CLIENTE
echo "Nome do cliente: " . $cliente->getNome() . "<br>";
echo "Email do cliente: " . $cliente->getEmail() . "<br>";
echo $cliente->comprar() . "<br>";
?>

