<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PAGINA INICIAL | HOPE</title>
		<link rel="icon" href="img/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo-index.css">
        <link rel="stylesheet" href="bootstrap-4.1.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<?php
			include_once 'nav.php';
		?>
		        </div>
        <div class = "container">
            <section>
                <div class ="row">
                    <div class="col-md-6" id = "divDaImagem">
                        <img id="imagemMenu" src="img/imagem.jpg">
                    </div>
                    <div class = "col-md-6" id = "texto">
                        <h1 id="tituloPrincipal">
                            HOPE
                        </h1>
                        <h2 id="subTitulo">
                            Sistema de agendamento de tarefas
                        </h2>
                        <h3 id="conteudo">
                           O sistema HOPE veio para facilitar todo o processo de gestão das suas tarefas diarias, no nosso site você poderá adicionar suas tarefas de forma rapidá e facil, edita-las sempre que desejar e remover as tarefas. Comece agora mesmo, <a href="cadastro.php">cadastre-se</a> para começar e surpreenda-se. Se você ja e um usuario faça <a href="login.php">login</a> e continue de onde parou. 
                        </h3>
                    </div>
                </div>
            
            
                <div class="row" id="divLinkGeral">
                    <div class="col-md-4" id="divLink">
                        <a href="pagina que quiser linkar na imagem" >
                            <img id="imagemlink1" src="img/imagemLink1.jpg"></a>
                            <h3 id="legendalink">
                                Saia do papel
                            </h3>
                    </div>
                    <div class="col-md-4" id="divLink">
                        <a href="pagina que quiser linkar na imagem" >
                            <img id="imagemlink2" src="img/imagemLink2.jpg"></a>
                            <h3 id="legendalink">
                                Mais Segurança
                            </h3>
                    </div>
                    <div class="col-md-4" id="divLink">
                        <a href="pagina que quiser linkar na imagem" >
                            <img id="imagemlink3" src="img/imagemLink3.jpg"></a>
                            <h3 id="legendalink">
                                Acesso rapido e facil
                            </h3>
                    </div>
                </div>
            </section>
            <footer>
                <div class="row">
                    <div class="col-md-12" id="divRodape">
                        <h1 id="rodape">
                            torne sua vida mais feliz e organizada
                        </h1>
                        <img id="logo" src="img/logo.png"
                    </div>
                </div>
            </footer>

        </div>
	</body>
</html>