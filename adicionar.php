<?php 
	include_once 'conexao.php';
	include_once 'VerificarLogin.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Adicionar</title>
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/animate.css">
	</head>
	<body>
		<?php
		  if(isset($_POST['salvar']) && $_POST['salvar'] == 'salvar'){
			$titulo = $_POST['titulo'];
			$local = $_POST['local'];
			$data = $_POST['data'];
			$horario = $_POST['horario'];
			$usuario = $_SESSION['email'];
			$status = 'pendente';

			if(empty($titulo) || empty($local) || empty($data) || empty($horario)){
				//Se os campos não estiverem preenchidos
			?>
				<div id="mensagem" class="alert alert-danger animated bounceInLeft" role="alert">
		  			PREENCHA TODOS OS CAMPOS!
		  			<a class="btn btn-warning" href="adicionar.php">Tentar Novamente</a>
		  		</div>
		  	<?php	
			}else{
				//inserindo os dados no banco de dados
				$sql = 'INSERT INTO eventos (titulo, local, data, horario, email, status) VALUES (?,?,?,?,?,?)';
				$stmt = $conexao->prepare($sql);
				$stmt->bind_param("ssssss", $titulo, $local, $data, $horario, $usuario, $status);
				if($stmt->execute()){
				?>
					<div id="mensagem" class="alert alert-danger animated bounceInLeft" role="alert">
		  				CADASTRO REALIZADO COM SUCESSO! 
		  				<a class="btn btn-warning" id="btnadicionar" href="adicionar.php">Novo Cadastro</a>
		  				<a href="painel.php" class="btn btn-warning">FECHAR</a>
		  			</div>
				<?php
				}else{
					?>
					<div id="mensagem" class="alert alert-danger animated bounceInLeft" role="alert">
		  				ERRO AO CADASTRAR NO BANCO DE DADOS!
		  				<a class="btn btn-warning" href="adicionar.php">Tentar Novamente</a>
		  			</div>
					<?php
				}
			}
		  }
		?>
		<form method="POST" action="">
			<center><h2>INFORMAÇÕES DA TAREFA</h2></center>
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
			  <input type="time" class="form-control" name="horario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div id="botoesAdic">
				<input type="reset" value="LIMPAR" class="btn btn-warning" />
				<a href="painel.php" class="btn btn-warning">FECHAR</a>
				<input type="submit" value="SALVAR" class="btn btn-warning" />
				<input type="hidden" name="salvar" value="salvar" />
			</div>	
		</form>	
	</body>
</html>