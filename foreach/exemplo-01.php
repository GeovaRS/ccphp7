<?php
 $meses = array(
  "Janeiro",
  "Fevereiro",
  "Março",
  "Abril",
  "Maio",
  "Junho",
  "Julho",
  "Agosto",
  "Setembro",
  "Outubro",
  "Novembro",
  "Dezembro"
 );

 foreach($meses as $index => $mes) {
  echo $index + 1 . " - " . $mes . "<br />";
 }
?>
