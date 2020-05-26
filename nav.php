
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">HOPE</a>
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
				<a class="nav-link" href="sobre.php">SOBRE</a>
				</li>
	    </ul>
		</div>
		<?php 
			if (!isset($_SESSION['nome']) && !isset($_SESSION['email'])) {
		?>
		<a href="cadastro.php" class="botaoIndex btn btn-warning">CADASTRE-SE</a>
		<a href="login.php" class="botaoIndex btn btn-warning">LOGIN</a>
		<?php
			}else{
				echo $_SESSION['nome']."&ensp;"; 
		?>
		<a href="sair.php" class="btn btn-warning" id="btnlogout"> SAIR</a></p>
		<?php
			}
		?>
</nav>