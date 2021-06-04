<?php
 // Funções Anônimas
 function teste($callback) {
  // Processo Lento

  $callback();
 }

 teste(function() {
  echo "Terminou<br />\n";
 });
?>
