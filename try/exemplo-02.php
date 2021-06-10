<?php
 function tratarNome($name) {
  if(!$name) {
   throw new Exception("Nenhum nome informado.<br />\n", 1);
  }

  return ucfirst($name) . "<br />\n";
 }

 try {
  echo (tratarNome("joão"));
  echo (tratarNome(""));
 } catch(Exception $e) {
  echo $e->getMessage();
 } finally {
  echo "Executou o try!";
 }
?>
