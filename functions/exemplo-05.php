<?php
 $a1 = 10;

 // Passagem de Parâmetros/Argumentos por Valor
 function trocarValor1($b) {
  $b += 50;
  return $b;
 }

 echo $a1;
 echo "<br />\n";
 echo trocarValor1($a1);
 echo "<br />\n";
 echo $a1;
 echo "<br />\n";

 $a2 = 10;
 // Passagem de Parâmetros/Argumentos por Referência
 // (Endereço da Variável na Memória)
 function trocarValor2(&$b) {
  $b += 50;
  return $b;
 }

 echo trocarValor2($a2);
 echo "<br />\n";

 echo trocarValor2($a2);
 echo "<br />\n";
 echo $a2;
 echo "<br />\n";
?>
