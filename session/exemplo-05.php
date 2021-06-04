<?php
 require_once("config.php");

 echo session_save_path();

 var_dump(session_status());

 echo "<br />";

 switch(session_status()) {
  case PHP_SESSION_DISABLED:
   echo "Sessões desativadas";;
   break;
  case PHP_SESSION_NONE:
   echo "Sessões habilitadas, mas nenhuma existe";
   break;
  case PHP_SESSION_ACTIVE:
   echo "Sessões habilitadas, uma existe";
   break;
 }
?>
