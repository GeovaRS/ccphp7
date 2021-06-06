<?php
 // POO - Programação Orientada a Objetos
 // PDO - PHP Data Object
 // DAO - Data Access Object
 // Criar Classes no PHP para fazer Abstração de Tratamento dos Dados no MySQL.
 // Os Sistemas desenvolvidos só olham para as Classes PHP.
 // Segurança na execução das transações.
 // Isolamento de informações Armazenadas no Banco de Dados MySQL
 // Herança Métodos e Controles, Polimorfismo, Encapsulamento Getters e Setters.
 // Praticar os Conceitos abordados até aqui do Paradigma POO.
 // Para esse código rodar incluir a senha do usuário root do seu MySQL Local.
 // Caso seja um outro usuário Alterar para ele, junto com a senha.

 class Sql extends PDO {
  private $conn;

  public function __construct() {
   $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
  }

  private function setParams($statement, $parameters = array()) {
   foreach($parameters as $key => $value) {
    $this->setParam($statement, $key, $value);
   }
  }

  private function setParam($statement, $key, $value) {
   $statement->bindParam($key, $value);
  }

  // Correção deste Método foi dada pelo aluno HCode Davi
  // Méritos a ele
  // Não obtivemos resposta da solução
  // pela equipe de Instrutores da HCode Treinamentos.
  // Transcrição da Mensagem com ajustes para Comentário de uma Linha em PHP8
  // Inclusões/Correções

  // David
  // há 3 meses
  // 9 votos a favor
  // Eu acho errado eles colocarem como solução tu voltar uma versão do PHP 8
  // ao invés de informar como o código deveria ser adaptado
  // para a nova versão, mas ok.

  // Tenta dessa forma que deu certo,
  // não podemos usar a palavra query no PHP8
  // pois dentro da classe PDO tem um método chamado query().
  // Este Método conflita com a reescrita exposta,
  // pois o Método query() foi Redefinido da Classe PDO no PHP7 para o PHP8.

  public function execQuery($rawQuery, $params = array()) {
   $stmt = $this->conn->prepare($rawQuery);
   $this->setParams($stmt, $params);
   $stmt->execute();
   return $stmt;
  }

  public function select($rawQuery, $params = array()): array {
   $stmt = $this->execQuery($rawQuery, $params);
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
 }

 // Muito usado nas Aplicações MVC desenvolvidas em PHP
?>
