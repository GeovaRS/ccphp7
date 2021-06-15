<?php
 session_start();

 // Após verificar Login e Senha reinicie o ID da Sessão
 session_destroy();

 session_start();
 
 session_regenerate_id();

 echo session_id();
?>