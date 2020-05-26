<?php
	include_once 'conexao.php';
	include_once 'VerificarLogin.php';
	$id = $_GET['id'];

	$sql = "UPDATE eventos SET status='concluido' WHERE id='$id'";
	$result = mysqli_query($conexao, $sql);
	header('location:/hope/painel.php');
?>