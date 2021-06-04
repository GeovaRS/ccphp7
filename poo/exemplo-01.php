<?php
 // Estrutura de uma Classe em PHP
 class Pessoa {
  // Atributos com Encapsulamento de Escopo Público
  public $nome;

  // Métodos com Encapsulamento de Escopo Público
  public function falar() {
   return "Meu nome é " . $this->nome;
  }
 }

 $glaucio = new Pessoa();
 $glaucio->nome = "Gláucio Daniel";
 echo $glaucio->falar();
?>
