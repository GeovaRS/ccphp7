<?php
 session_id("0l2nneuve6ru629j03tk0i3uuc");

 require_once("config.php");

 session_regenerate_id();

 echo session_id();

 var_dump($_SESSION);

 // Session Hijacking - Ataque Hacker de Sessão
?>
