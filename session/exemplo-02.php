<?php
 // session_start();
 require_once("config.php");
 echo $_SESSION["nome"];

 // session_unset();
 // session_unset(["nome"]);
 session_destroy();
?>
