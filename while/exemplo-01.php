<?php
 // while
 // do while
 // Executa ao menos uma vez
 // Diferente do for foreach é usado para Arrays e Coleções
 // while pode ser usado para qualquer assunto
 // Não se tem necessariamente uma sequência

 $condicao = true;
 while($condicao) {
  $numero = rand(1, 10);
  if($numero === 3) {
   echo "Três";
   $condicao = false;
  }
  echo $numero . " ";
 }
?>
