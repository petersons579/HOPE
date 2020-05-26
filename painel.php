<?php 
	include_once('conexao.php');
	include_once('VerificarLogin.php');
	$sobrenome = $_SESSION['sobrenome'];
	$usuario = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bem Vindo <?php echo $nome."  "; echo $sobrenome; ?></title>
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.html">HOPE</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			        <li class="nav-item">
        				<a class="nav-link" href="index.php">PAGINA INICIAL</a>
      				</li>
			    	<li class="nav-item">
        				<a class="nav-link" href="painel.php">Minhas Tarefas</a>
      				</li>
			     	<li class="nav-item">
        				<a class="nav-link" href="adicionar.php">Adicionar Tarefas</a>
      				</li>
			    </ul>
			    <div id="usuarioLogado"> 
					<p><?php echo $nome."  "; echo $sobrenome; ?>
					<a href="sair.php" class="btn btn-warning" id="btnlogout"> SAIR</a></p>
				</div>
		  </div>
		</nav>
		<?php
			include_once 'inicial.php';
		?>
		<div id="blocoTarefas">
			     <div class="legends">
         			<span class="legenda"><span class="blue"></span> Conluido</span>
     			</div>
     			<div class="legends">
     				<span class="legenda"><span class="red"></span> Pendente</span>
     			</div>
			<?php
				include_once 'tarefas.php';
			?>	
		</div>
		<!-- Pagina criada por Peterson -->
	</body>
</html>