<?php
 // Contador de Laços
 // Controlado por Condição Inicial até Condição Final
 // Intervalos de Incrementos/Decrementos
 // Uso do break e do continue em Laços for
 // for($i = 0; $i < 10; $i++) {
 //  echo $i . "<br />";
 // }

 // for($i = 0; $i <= 10; $i++) {
 //  echo $i . "<br />";
 // }

 // Exemplo1 com continue dentro do Laço for
 // for($i = 0; $i < 1000; $i += 5) {
 //  if($i > 200 && $i < 800) continue;
 //  echo $i . "<br />";
 // }

 // Exemplo2 com continue dentro do Laço for
 // for($i = 0; $i < 1000; $i += 5) {
 //  if($i >= 200 && $i <= 800) continue;
 //  echo $i . "<br />";
 // }

 // Exemplo3 com continue e break dentro do Laço for com Incremento de Passo 5
 for($i = 0; $i < 1000; $i += 5) {
  if($i >= 200 && $i <= 800) continue;
  if($i === 900) break;
  echo $i . "<br />";
 }
?>
