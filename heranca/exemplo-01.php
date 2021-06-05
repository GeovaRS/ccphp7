<?php
 // Herança
 // Um dos Pilares do Paradigma da Programação Orientada a Objetos.
 // Ocorre Quando Classe(s) herda(m) Atributo(s) e Método(s),
 // desde que seja(m) public/protected, de uma Classe Pai, por extensão.
 // Abstração
 // Generalização/Especificação.
 // Agregação/Composição
 // UML - Unified Modeling Language
 // Código Limpo - Clean Code
 // Padrões de Projeto - Design Patterns
 // Fazer o melhor que se pode, na condição que se tem.
 // Documentos possuem regras de validação de dados e partes em comum.
 // Sempre o Filho que acessa informações do Pai

 class Documento {
  private $numero;

  public function getNumero() {
   return $this->numero;
  }

  public function setNumero($n) {
   $this->numero = $n;
  }
 }

 class CPF extends Documento {
  public function validar(): bool {
   $numeroCPF = $this->getNumero();
   // Validação do CPF
   return true;
  }
 }

 $doc = new CPF();
 $doc->setNumero("11122233344");
 echo "CPF: " . $doc->getNumero();
 var_dump($doc->validar());
?>
