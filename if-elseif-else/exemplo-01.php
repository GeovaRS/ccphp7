<?php
 // Estruturas de Controle de Fluxo Condicional if-elseif-else
 // $qualSuaIdade = 30;
 // $qualSuaIdade = 11;
 // $qualSuaIdade = 17;
 // $qualSuaIdade = 25;
 $qualSuaIdade = 67;
 $idadeCrianca = 12;
 $idadeMaior = 18;
 $idadeMelhor = 65;

 // if($qualSuaIdade < $idadeCrianca) {
 //  echo "Você é uma Criança";
 // }

 // if($qualSuaIdade < $idadeCrianca) {
 //  echo "Você é uma Criança";
 // } else {
 //  echo "Você não é Criança";
 // }

 // if($qualSuaIdade < $idadeCrianca) {
 //  echo "Você é uma Criança";
 // } elseif($qualSuaIdade < $idadeMaior) {
 //  echo "Você é Adolescente";
 // } elseif($qualSuaIdade < $idadeMelhor) {
 //  echo "Você é Adulto";
 // } else {
 //  echo "Você é Idoso";
 // }

 // Operador Ternário (if de uma linha só)
 echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";
?>
