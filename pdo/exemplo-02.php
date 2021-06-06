<?php
 // DSN - Data Search Name - Microsft SQLServer Express
 $conn=new PDO(
  "sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "");

  $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

  $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach($results as $row) {
   foreach($row as $key => $value) {
    echo "<strong>" . $key . "</strong>: " . $value . "<br />\n";
   }
   echo "<hr />\n";
  }

  // var_dump($results);
?>
