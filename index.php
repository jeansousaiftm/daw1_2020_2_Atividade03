<!DOCTYPE html>
<html>
	
	<head>
		<title>CRUD Escola</title>
		
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/custom.css" />
		
	</head>
	
	<body>
		
		<div class="container">
			
			<br/>
			
			<h1>Alunos</h1>
			
			<br/>
			
			<form class="row">
				
				<div class="form-group col-3">
					<label>Nome:</label>
					<input type="text" name="nome" class="form-control" />
				</div>
				
				<div class="form-group col-2">
					<label>Dt. Nascimento:</label>
					<input type="date" name="nascimento" class="form-control" />
				</div>
				
				<div class="form-group col-2">
					<label>Ano:</label>
					<input type="number" name="ano" class="form-control" />
				</div>
				
				<div class="form-group col-3">
					<label>Matéria:</label>
					<input type="text" name="materia" class="form-control" />
				</div>
				
				<div class="form-group col-2">
				
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
					
				</tbody>
				
			</table>
			
		</div>	
		
	</body>
	
</html>