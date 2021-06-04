<?php
// Parâmetros Escaláveis
 function somar(int ...$valores) {
  return array_sum($valores);
 }

 echo somar(2, 2);
 echo "<br />\n";
 echo somar(25, 33);
 echo "<br />\n";
 echo somar(1.5, 3.2);
 echo "<br />\n";
 echo somar(1.5, 3.2, 45, 78);
 echo "<br />\n";
?>
