<?php 
	//Quando o usuario entrar sem estar logado será redirecionado para a pagina de login
	session_start();
	$nome = $_SESSION['nome'];
	$email = $_SESSION['email'];

	if (!isset($_SESSION['nome']) && !isset($_SESSION['email'])) {
		header('Location: login.php');
		exit;
	}
	//Pagina criada por Peterson
?>