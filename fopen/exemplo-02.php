<?php
 require_once("config.php");
 $sql = new Sql();
 $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
 // print_r($usuarios);
 // var_dump($usuarios);
 // echo json_encode($usuarios);

 $headers = array();
 foreach($usuarios[0] as $key => $value) {
  array_push($headers, ucfirst($key));
  // print_r($headers);
 }
 $file = fopen("usuarios.csv", "w+");
 fwrite($file, implode(",", $headers) . "\n");

 foreach($usuarios as $row) {
  $data = array();
  foreach($row as $key => $value) {
   array_push($data, $value);
  } // End foreach de Coluna
  fwrite($file, implode(",", $data) . "\n");
 } // End foreach de Linha

 fclose($file);
 // echo implode(",", $headers);
?>
