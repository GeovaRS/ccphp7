<?php
 $id = (isset($_GET["id"])) ? $_GET["id"] : 1;
 if(!is_numeric($id) || strlen($id) > 5) {
  echo("Pegamos você!");
 }

 $conn = mysqli_connect("localhost", "root", "", "dbphp7");

 $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

 $exec = mysqli_query($conn, $sql);

 while($resultado = mysqli_fetch_object($exec)) {
  // echo $resultado->deslogin . "<br />\n";
  var_dump($resultado);
 }

 // http://www.hcode.lan.br/ccphp7/s023/a002/aulas/seguranca/exemplo-02.php
 // /?id=2%20OR%201%20=%201%20--
?>
