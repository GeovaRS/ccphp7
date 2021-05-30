<?php
 $nome1 = "HCode";
 $nome2 = 'Treinamentos';

 // var_dump($nome1, $nome2);

 // '' Não Faz Interpolação de Variáveis
 // Não Verifica se o Texto contém variáveis.
 // echo 'ABC $nome1';

 // "" Faz Interpolação de Variáveis
 // Verifica se o Texto contém variáveis e faz a Interpolação dos seus valores.
 echo "ABC $nome1";
?>
