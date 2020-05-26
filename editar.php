<?php
	include_once 'conexao.php'; //incluindo a conexao
	include_once 'verificarLogin.php';

	if (isset($_POST['verificar']) && $_POST['verificar'] == 'verificar'){

		if ($_POST['titulo']=='' || $_POST['local']=='' || $_POST['data']=='' || $_POST['hora']=='') {
		?>
		<div id="mensagem" class="alert alert-danger animated bounceInLeft" role="alert">
			PREENCHA TODOS OS CAMPOS! 
			<a href="editar.php" class="btn btn-warning">Tentar Novamente</a>
		</div>
		<?php
		}else{
			$id = $_GET['id'];
			$titulo = $_POST['titulo'];	//recebendo dados a serem editados 
			$local = $_POST['local'];
			$data = $_POST['data'];
			$hora = $_POST['hora'];

			$sql = "UPDATE eventos SET titulo='$titulo', local='$local', data='$data', horario='$hora' WHERE id ='$id'";
			if ($result = mysqli_query($conexao, $sql)){
			?>
				<div id="mensagem" class="alert alert-danger animated bounceInLeft" role="alert">
					EDIÇÃO CONCLUIDA! 
					<a href="painel.php" class="btn btn-warning">FECHAR</a>
				</div>
			<?php
			}
		}	
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>EDITAR TAREFAS | HOPE - TAREFAS ONLINE</title>
	    <link rel="icon" href="img/favicon.ico">
	    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/animate.css">
	    
	</head>
	<body class="text-center">
	<title>HOPE</title>
	<h2>EDITAR TAREFAS</h2>
	<form method="POST" action="">
			<div class="input-group mb-3">
		  	<div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">TITULO  </span>
		  	</div>
		  	<input type="text" class="form-control" name="titulo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">LOCAL </span>
			</div>
			<input type="text" class="form-control" name="local" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">DATA </span>
			</div>
			<input type="date" class="form-control" name="data" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">HORARIO </span>
			</div>
			<input type="time" class="form-control" name="hora" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		</div>
		<input type="hidden" name="verificar" value="verificar"/>
		<input class="btn btn-warning" type="submit" value="Salvar" />
		<a href="painel.php" class="btn btn-warning">Cancelar</a> 
	</form>	
</html>	
