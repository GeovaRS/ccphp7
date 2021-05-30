<?php
 // Funções Top 10 do PHP para tratamento/manipulação de Strings
 // https://php.net/manual/pt_BR/ref.strings.php
 $frase = "A repetição é mãe da retenção.";
 $palavra = "mãe";
 // $q = strpos($frase, "mãe");
 $q = strpos($frase, $palavra);
 var_dump($q);
 $texto1 = substr($frase, 0, $q);
 var_dump($texto1);
 // echo "<br />";
 // $texto2 = substr($frase, $q);
 $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
 var_dump($texto2);
?>
