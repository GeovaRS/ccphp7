<?php
 // https://www.phpdoc.org

 // Boas Práticas de Programação na Linguagem PHP
 // PSR
 // Padrão CamelCase camelCase
 // $anoNascimento = 1969;
 // $nomeCompleto = "Geová Ramalho dos Santos";

 // Na linha abaixo temos uma variável com número em seu identificador
 $nome1 = "João";
 $sobrenome = "Rangel";
 $nomeCompleto = $nome1 . " " . $sobrenome;

 echo $nome1;
 echo "<br />";
 echo $nomeCompleto;
 echo "<br />";

 unset($nome1);
 unset($sobrenome);
 unset($nomeCompleto);

 if(isset($nome1)) {
  echo $nome1;
 }

 // Garbage Collector

 // Tipos de Dados
 // Numéricos (Number)
 //  Inteiros (Int)
 //  Decimais (Float)
 // Strings (String)
 // Booleanos (Boolean)

 // Tipos Dados Compostos
 // Arrays
 // Objetos

 // Tipos de Dados Especiais
 // Resource
 // null
?>
