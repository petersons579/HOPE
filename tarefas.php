<?php
	include_once 'conexao-calendario.php';
	include_once 'VerificarLogin.php';
	$usuario = $_SESSION['email'];

	//preparando a consulta no Banco de Dados
	$sql = "SELECT id, titulo, local, data, horario, status FROM eventos WHERE email = '$usuario' ORDER BY data, horario asc";
	//Realizando a consulta no BD
	$result = $pdo->query($sql);
	//Retornando os dados em um array
	$dados = $result->fetchAll( PDO::FETCH_ASSOC );

	if (count($dados)>0) {
	
	foreach ($dados as $dado) {
		//mudei as variaveis para não dar conflito com os outros arquivos
		$id = $dado['id'];
		$title = $dado['titulo'];
		$loc = $dado['local']; 
		$date = $dado['data'];
		$hora = $dado['horario'];
		$situacao = $dado['status'];
	?>
		<div class="tarefa">
			<strong><label>TITULO:&nbsp</strong><?php echo $title; ?></label><br />
			<?php
				if ($situacao == 'concluido') {
					echo '<div class="concluido"><span class="blue"></span></div>';
				}else{
					echo '<div class="pendente"><span class="red"></span></div>';
				}
			?>
			<label>LOCAL:&nbsp<?php echo $loc; ?></label><br>
			<label>HORA E DATA:&nbsp<?php echo date("d/m/Y", strtotime($date))."     "; ?><?php echo $hora; ?></label>
			<div>
				<a class="btn btn-warning" href="remover.php?id=<?php echo $dado['id'];?>">REMOVER</a>
				<a class="btn btn-warning" href="concluir.php?id=<?php echo $dado['id']; ?>">CONCLUIR</a>
				<a class="btn btn-warning" href="editar.php?id=<?php echo $dado['id'];?>">EDITAR</a>
			</div>	
		</div>
	<?php	
	}
	}else{
		echo "NÃO EXISTEM TAREFAS CADASTRADAS";
	} 
?>