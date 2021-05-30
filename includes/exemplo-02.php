<?php
 // include "inc/exemplo-01.php";
 // include_once "inc/exemplo-01.php";
 // include "exemplo-01.php";
 // include_once "exemplo-01.php";
 // require "inc/exemplo-01.php";
 // require_once "inc/exemplo-01.php";
 require_once "exemplo-01.php";
 $resultado = somar(10, 25);
 echo $resultado;
 // Erros comuns quando se trabalha com Includes no PHP
 // Erros de Sintaxe nos arquivos incluídos, refletem no arquivo de chamada.
 // Verificar onde se encontram os arquivos incluídos
 // Caminhos relativos/absolutos
 // Se tiver que subir mais de duas pastas repense a estrutura organizacional.
 // Alunos da HCode são Especialistas.
 // Chamadas com include tentam manter a execução do código.
 // Servidores de inclusão usam o include path.
 // Chamadas include Permitem includes dinâmicos (Brexas de Segurança).
 // Chamadas com require geram erros faltais e param a execução do código.
 // Obriga que o arquivo exista e que esteja em pleno/perfeito funcionamento.
 // Chamadas include_once evitam loops de chamadas.
 // Chamadas require_once evitam loops de chamadas.
 // A partir do PHP7, erros fatais geram exceção para tratamentos com try/catch.
 ?>
