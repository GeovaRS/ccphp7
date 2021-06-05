<?php
 require_once("config.php");

 use Cliente\Cadastro;

 $cad = new Cadastro();

 $cad->setNome("Djalma Sindeaux");
 $cad->setEmail("djalma@hcode.com.br");
 $cad->setSenha("123456");

 // A Função echo só exibe textos.
 // Não consegue exibir objetos PHP.
 // O Método __toString() será invocado para gerar o Texto em Formato JSON.
 // echo $cad;

 $cad->registrarVenda();
?>
