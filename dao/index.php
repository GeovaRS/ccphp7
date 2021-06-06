<?php
 require_once("config.php");
 // $sql = new Sql();
 // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
 // echo json_encode($usuarios);

 // Banco MySQL: dbphp7
 // Tabela: tb_usuarios
 // Carregar/Exibir Dados de um Usuário
 // $root = new Usuario();
 // $root->loadById(1);
 // echo $root;

 // Carregar/Exibir uma Lista de Usuários
 // $lista = Usuario::getList();
 // echo json_encode($lista);

 // Carregar/Exibir uma Lista de Usuário com busca pelo Login
 // $search = Usuario::search("jo");
 // echo json_encode($search);

 // Carregar/Exibir um Usuário com Login e Senha
 $usuario = new Usuario();
 $usuario->login("root", "!@#$%");
 echo $usuario;
?>
