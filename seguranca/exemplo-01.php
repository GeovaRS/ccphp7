<?php
 if($_SERVER["REQUEST_METHOD"] === "POST") {
  // $cmd = $_POST["cmd"];
  // $cmd = escapeshellcmd($_POST["cmd"]);
  $cmd = escapeshellarg($_POST["cmd"]);

  var_dump($cmd);

  echo "<pre>";
  $comando = system($cmd, $retorno);
  echo "</pre>";
 }
?>

<form method="post">
 <input type="text" name="cmd" />
 <button type="submit">Enviar</button>
</form>
