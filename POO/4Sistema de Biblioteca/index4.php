<?php

include "Item.php";
include "Dvd.php";
include "Livro.php";
include "Revista.php";


//Criação dos OBJETOS
$dvd = new Dvd("Sexta Feira 13", "Ronny Yu", 120);
$livro = new Livro("Harry Potter", "J. K. Rowling", 300);
$revista = new Revista("Veja", "Editora Abril", "Edição 2023");

//Mostrando os Dados 

//DVD
echo $dvd->detalhes() . "<br><br>";
//Livro
echo $livro->detalhes() . "<br><br>";
//Revista
echo $revista->detalhes() . "<br><br>";
?>
