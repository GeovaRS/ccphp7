<?php
 // Variáveis Pré-Definidas
 // Variáveis de Ambiente - Arrays Super Globais
 // Podem ser acessadas em qualquer área/escopo da Linguagem.
 // URL - Uniform Resource Locator
 // URI - Uniform Resource Identifier
 // Query String - Parâmetros Passados nas URL como ?param1=xxx&param2=yyy
 // $nome = (int)$_GET["a"];
 // var_dump($nome);

 // $_GET[""];
 // $_POST[""];
 // $_SESSION[""];

 $ip = $_SERVER["REMOTE_ADDR"];
 $scriptName = $_SERVER["SCRIPT_NAME"];
 echo $ip;
 // echo "<br />";
 echo $scriptName;
?>
