<!DOCTYPE html>
<html>
	
	<head>
		<title>CRUD Escola</title>
		
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/custom.css" />
		
	</head>

<?php
	
	$conexao = new mysqli("localhost", "root", "", "escola");
	
	$alunos = $conexao->query("SELECT * FROM aluno;");
	
	$id = 0;
	$nome = "";
	$nascimento = "";
	$ano = "";
	$materia = "";
	
	if (isset($_GET["id"])) {
		
		$id = $_GET["id"];
			
		$dados = $conexao->query("SELECT * FROM aluno WHERE id = " . $id);
		
		$aluno = $dados->fetch_assoc();
		
		$nome = $aluno["nome"];
		$nascimento = $aluno["nascimento"];
		$ano = $aluno["ano"];
		$materia = $aluno["materia"];
		
	}

?>
	
	<body>
		
		<div class="container">
			
			<br/>
			
			<h1>Alunos</h1>
			
			<br/>
			
			<form method="POST" action="salvar.php" class="row">
				
				<div class="form-group col-3">
					<label>Nome:</label>
					<input type="text" name="nome" class="form-control" value="<?=$nome;?>" />
				</div>
				
				<div class="form-group col-2">
					<label>Dt. Nascimento:</label>
					<input type="date" name="nascimento" class="form-control" value="<?=$nascimento;?>" />
				</div>
				
				<div class="form-group col-2">
					<label>Ano:</label>
					<input type="number" name="ano" class="form-control" value="<?=$ano;?>" />
				</div>
				
				<div class="form-group col-3">
					<label>Matéria:</label>
					<input type="text" name="materia" class="form-control" value="<?=$materia;?>" />
				</div>
				
				<div class="form-group col-2">
					
					<input type="hidden" name="id" value="<?=$id;?>" />
					
					<button type="submit" class="btn btn-success btn-bottom">
						Salvar
					</button>
					
					<a href="index.php" class="btn btn-primary btn-bottom">
						Novo
					</a>
					
				</div>
				
			</form>
			
			<br/>
			
			<h1>Listagem</h1>
			
			<br/>
			
			<div class="form-group">
				
				<input type="text" id="pesquisar" placeholder="Pesquisar..." class="form-control" />
				
			</div>
			
			<table class="table table-striped">
				
				<colgroup>
					<col width="200">
					<col width="200">
					<col width="80">
					<col width="80">
				</colgroup>
				
				<thead>
					<tr>
						<th>Nome</th>
						<th>Matéria</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
				</thead>
				
				<tbody>
				<?php
					while ($aluno = $alunos->fetch_assoc()) {
				?>
						<tr>
							<td><?=$aluno["nome"];?></td>
							<td><?=$aluno["materia"];?></td>
							<td>
								<a href="index.php?id=<?=$aluno["id"];?>" class="btn btn-warning">
									Editar
								</a>
							</td>
							<td>
								<a href="excluir.php?id=<?=$aluno["id"];?>" class="btn btn-danger" onclick="return confirm('Tem certeza?');">
									Excluir
								</a>
							</td>
						</tr>
				<?php
					}
				?>
				</tbody>
				
			</table>
			
		</div>	
		
	</body>
	
</html>

<?php
	
	mysqli_close($conexao);
	
?>