<?php
 // $nome = "joão rangel";
 $nome = "joao rangel";
 echo $nome;
 echo "<br />";
 // Todas as Letras das Palavras da Variável $nome em Upper Case
 // echo strtoupper($nome);
 $nome = strtoupper($nome);
 echo $nome;
 echo "<br />";
 // Todas as Letras das Palavras da Variável $nome em Lower Case
 $nome = strtolower($nome);
 echo $nome;
 echo "<br />";
 // Upper Case na Primeira Letra da Primeira Palavra da Variável $nome
 // Muito usado na criação de Parágrafos
 echo ucfirst($nome);
 echo "<br />";

 // Upper Case na Primeira Letra das Palavras da Variável $nome
 echo ucwords($nome);
?>
