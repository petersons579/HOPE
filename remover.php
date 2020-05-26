<?php
	include_once("conexao.php");//incluir a conexão onde ha a conexão com o banco de dados
	include_once('VerificarLogin.php');
	
	$id = $_GET['id'];// estarei utilizando para receber os dados, com um numero de ID
	$result_usuario = "DELETE FROM eventos WHERE id='$id'";// responsavel por apagar // WHERE o valor do ID sera apagado
	$resultado_usuario = mysqli_query($conexao, $result_usuario);// para executar
	header('location: /hope/painel.php')
?>