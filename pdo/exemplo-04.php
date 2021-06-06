<?php
 // Evitar ao máximo executar:
 // UPDATE sem a Cláusula WHERE.
 // É Perigoso, pois altera todos os registros da tabela em questão.
 $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

 $stmt = $conn->prepare("UPDATE tb_usuarios
 SET deslogin = :LOGIN, dessenha = :PASSWORD
 WHERE idusuario = :ID");

 $id = "2";
 $login = "joao";
 $password = "qwerty";

 $stmt->bindParam(":ID", $id);
 $stmt->bindParam(":LOGIN", $login);
 $stmt->bindParam(":PASSWORD", $password);

 $stmt->execute();

 echo "Alteração OK!";
?>
