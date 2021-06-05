<?php
 // Encapsulamento
 // Proteger Atributos e Métodos das Classes
 // Permite controlar quem pode ver o que e como.
 // Modificadores de Acesso para Atributos e Métodos.
 //  public - Mesma Classe/Classes Extendidas/Objetos
 //  protected - Mesma Classe/Classes Extendidas
 //  private - Mesma Classe
 //  static - Não precisa Instanciar - Precisa ser public
 //           Para usar o operador Classe::Atributo/Método Estático

 class Pessoa {
  public $nome = "Rasmus Lerdorf";
  protected $idade = 48;
  private $senha = "123456";

  public function exibirDados() {
   echo $this->nome . "<br />\n";
   echo $this->idade . "<br />\n";
   // echo $this->senha . "<br />\n";
  }
 }

 class Programador extends Pessoa {
  public function exibirDados() {
   echo get_class($this) . "<br />\n";
   echo $this->nome . "<br />\n";
   echo $this->idade . "<br />\n";
   // echo $this->senha . "<br />\n";
  }
 }

 // $objeto = new Pessoa();
 // echo $objeto->nome . "<br />\n";
 // echo $objeto->idade . "<br />\n";
 // echo $objeto->senha . "<br />\n";
 // $objeto->exibirDados();

 $objeto = new Programador();

 $objeto->exibirDados();
 ?>
