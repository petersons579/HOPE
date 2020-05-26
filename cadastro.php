
<?php require 'config.php';//inclusao do arquivo ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro |HOPE</title>
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/teste.css">
	<link rel="stylesheet" href="css/animacao.css">
	<!--framework bootrstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php require 'usuarios.class.php';//inclusao do arquivo 
	$u = new Usuarios();//instacia da classe usuarios
	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		//scape de string\
		$nome = addslashes($_POST['nome']);
		$sobrenome = addslashes($_POST['sobrenome']);
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];
	
//verificar snão estao vazio os campos
	if (!empty($nome) && !empty($sobrenome) && !empty($email) && !empty($senha)) {
		
		//paramentro da  funcção cadastrar
		if ($u->cadastrar($nome, $sobrenome, $email, $senha)) {

			?>
			<div class="alert alert-success animated bounceInLeft" role="alert">
 			 Usuário cadastrado com sucesso!
				<a class="btn btn-success text-center" href="login.php">Faça o login</a>
			</div>
			<?php
		}else{
			?>
			<div class="alert alert-danger  animated bounceInLeft" role="alert">
 				E
 				ste usuário já existe!
				<a class="btn btn-warning" href="login.php">Faça o login</a>
			</div>
			
			<?php
		}
	}else{
		?>
		<div class="alert alert-danger" role="alert">
 				preencha todos os campos
				
			</div>
		<?php
	}
}
	

?>

<div class="center">
<div class="box-cadastro">
		<h2>Efetuar Cadastro</h2>
<form method="POST">
 <div class="form-group">
    
    <input type="text" class="form-control" name="nome"  placeholder="Digite seu nome">
   
  </div>
   <div class="form-group">
    
    <input type="text" class="form-control" name="sobrenome"  placeholder="Digite seu sobrenome">
   
  </div>
  <div class="form-group">
   
    <input type="email" class="form-control" name="email" placeholder="Digite seu E-mail">
   
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" name="senha"  placeholder="Digite sua senha">
  </div>
 
  <input style="margin-left: 100px;width: 150px;margin-top: 5px;" type="submit" name="acao"  class="btn btn-success" value="Cadastrar"><br><br>
 	<span style="margin-left: 70px;">Deseja realizar login? <a href="login.php">  clique aqui</a></span>
</form>		
</div>
</div>
</body>
</html>

