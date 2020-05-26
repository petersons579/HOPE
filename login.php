<?php 
  //iniciando a sessão e incluindo a conexão com o banco de dados
  include_once('conexao.php');
  session_start();  
?>

<!doctype html>
<html lang="pt-br">
  	<head>
	    <meta charset="utf-8">
	    <link rel="icon" href="img/favicon.ico">
	    <title>LOGIN | HOPE - TAREFAS ONLINE</title>
	    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	</head>
  	<body class="text-center">
		<?php
		    //verificando se exite o campo tipo hidden
		    if (isset($_POST['entrar']) && $_POST['entrar'] == 'login') {
		        $email = $_POST['email'];
		        $senha = md5($_POST['senha']);

		        //Verificando se os campos estão vazios
		        if (empty($email) || empty($senha)) {
		        	echo 'PREENCHA TODOS OS CAMPOS';
		        }else{
		            //Puxando as informações do banco de dados
		            $query = "SELECT nome, sobrenome, email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
		            $resultado = mysqli_query($conexao, $query);
		            $busca = mysqli_num_rows($resultado);
		            $linha = mysqli_fetch_assoc($resultado);

		            //Verica se o usuario estão cadastrados no banco de dados
		            if ($busca> 0) {
		               //Se o usuario existir será redirecionado para a pagina das tarefas
		               $_SESSION['nome'] = $linha['nome'];
		               $_SESSION['sobrenome'] = $linha['sobrenome'];
		               $_SESSION['email'] = $linha['email'];
		               header('Location: painel.php');
		               exit; 
		            }else{
		            	//Se o usuario ou senha não existir no banco de dados, aparecerá a seguinte mensagem
		  				?>
		  				<div id="mensagem" class="alert alert-danger animated bounceInLeft" role="alert">
		  					EMAIL OU SENHA INVÁLIDOS! TENTE NOVAMENTE OU CADASTRE-SE 
		  					<a class="btn btn-warning" href="login.php">Tentar Novamente</a>
		  					<a class="btn btn-warning" href="cadastro.php">CADASTRE-SE</a>
		  				</div>
		  				<?php
		            }
				}
		    }
		?>  
  		<div class="centro">
		    <div class="login">
		 		<form  method="POST" action="" enctype="multipart/form_data">

			      	<h1 class="titulo">LOGIN</h1>
			      	<label>Email</label>
			      	<input class="campos" type="email" name="email" placeholder="Digite seu email" required autofocus /><br><br>
			              
			      	<label>Senha</label>
			      	<input class="campos" type="password" name="senha" placeholder="Digite sua senha" required><br><br>
			                 
			    	<input class="botao" type="submit" value="ENTRAR" /><br><br>
			     	<a id="botaoLink" href="cadastro.php">Ainda não possui cadastro?</a>
			       	<input type="hidden" name="entrar" value="login" />
		        </form>
		    </div>
		</div>
     <!-- Pagina criada por Peterson -->
  	</body>
</html>
