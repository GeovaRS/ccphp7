<?php
 $pasta = "arquivos";
 $permissao = "0775";

 if(!is_dir($pasta)) {
  mkdir($pasta, $permissao);
 }

 echo "diretório criado com sucesso!";

 // 0 - 7
 // 0 - Nada
 // 5 - Leitura, Execução
 // 6 - Leitura, Gravação
 // 7 - Leitura, Gravação, Execução
 // 0775 - UGO (User, Group, Other)
 // sudo chmod -R 0775 pastas
 // sudo chmod -R 0644 arquivos
 // WordPress - CMS (Content Management System)
 // https://wordpress.org
?>
