<?php
//Dados do Servidor
$host = "localhost";
$user = "root";
$senha = "";
$banco = "hope";

//Efetuando a conexão
$conexao = mysqli_connect($host, $user, $senha, $banco) or print(mysqli_error()); 
mysqli_set_charset($conexao, 'utf8');

//Verificação
if (!mysqli_connect($host, $user, $senha)) {
	echo "ERRO AO CONECTAR AO SERVIDOR";
}
?>