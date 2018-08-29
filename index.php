<?php

require_once("config.php");

// Traz um usuário
/*$root = new Usuario();
$root->loadById(4);
echo $root;*/

// Traz uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);*/

// Traz uma lista de usuários buscando pelo login
/*$search = Usuario::search("o");
echo json_encode($search);*/

// Traz usuário validando pelo login e senha
/*$usuario = new Usuario();
$usuario->login("user","12345");
echo $usuario;*/

// Insere novo usuário
/*$usuario = new Usuario();
$usuario->setDeslogin("Testeeeeeeeeeeeeeeeee");
$usuario->setDessenha("Testeeeeeeeeeeeeeeeee");
$usuario->insert();
echo $usuario;*/

// Atualiza usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("Dougraaaaaaaaaas", "3r2-48sda");
echo $usuario;
?>