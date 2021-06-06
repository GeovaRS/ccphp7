<?php
 // Evitar ao máximo executar:
 // DELETE sem a Cláusula WHERE.
 // É Perigoso, pois Exclui Todos os Registros da Tabela em questão.
 $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

 $stmt = $conn->prepare("DELETE FROM tb_usuarios
 WHERE idusuario = :ID");

 $id = "3";

 $stmt->bindParam(":ID", $id);

 $stmt->execute();

 echo "Exclusão OK!";

 // Para Excluir Estrutura de Tabelas:
 // Comando DDL - DROP
 // Assim como o DML - DELETE o DDL - DROP É muito Perigoso.
 // Cuidado ao Executá-los em Seu Banco de Dados de Produção.
?>
