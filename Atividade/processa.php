<?php	
	require_once("Conexao.php");
	$nomeBanco = $_POST['nomeBanco'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$end = $_POST['endereço'];
	$pt = $_POST['pt'];
	//instacia
	$conexao = new Conexao($end,$usuario,$nomeBanco);
	$conexao->getCon()->exec("CREATE DATABASE $nomeBanco;");
?>	