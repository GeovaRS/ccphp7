<?php
 $conn = new mysqli("localhost", "root", "arGus@6345#RS", "dbphp7");
 if($conn->connect_error) {
  echo "Error: " . $conn->connect_error;
 }

 $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

 $stmt->bind_param("ss", $login, $pass);

 $login = "root";
 $pass = "!@#$%";
 $stmt->execute();

 $login = "user";
 $pass = "12345";
 $stmt->execute();
?>
