<?php

	require_once("config.php");

	//$root = new Usuario();

	//$root->loadbyId(3);

	//Carrega uma Lista de usuarios
	//$lista = Usuario::getList();
	//echo json_ecode($lista);

	//Carrega uma pesquisa pelo login
	//$search = Usuario::search("zu");
	//echo json_encode($search);

	//Login

	//$usuario = new Usuario();
	//$usuario->login("leo", "12345");
	//echo $usuario;

	//INSERT
	//$aluno = new Usuario("juju", "jaja"); 
	//$aluno->insert();
	//echo $aluno;

	//UPDATE
	//$usuario = new Usuario();
	//$usuario->loadbyId(10);
	//$usuario->update("boboca", "bobocao");
	//echo $usuario;

	//DELETE
	$usuario = new Usuario();
	
	$usuario->loadbyId(11);

	$usuario->delete();

	echo $usuario;

?>