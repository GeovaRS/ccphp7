<?php
 // Transactions
 // Begin Transaction
 // Commit - Efetivar Transação caso o comando der certo
 // RollBack - Cancelar Transação caso algum comando deu errado.
 $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

 $conn->beginTransaction();

 $stmt = $conn->prepare("DELETE FROM tb_usuarios
 WHERE idusuario = ?");

 $id = "2";

 $stmt->execute(array($id));

 // $conn->rollback();
 $conn->commit();

 echo "Exclusão OK!";

 // Recursos de Trasações dos SGBD's são melhor usados com rotinas de
 // Tratamento de Erros em Blocos try{} catch(){} do PHP
?>
