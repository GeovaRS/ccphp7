<?php
 $nome = "Gláucio";
 function teste1() {
  global $nome;
  echo $nome;
 }

 function teste2() {
  $nome = "João";
  echo $nome . " agora em teste2";
 }

 teste1();
 echo "<br />";
 teste2();

 // Super Globais possuem escopo maior que variáveis global, session e local.
?>
