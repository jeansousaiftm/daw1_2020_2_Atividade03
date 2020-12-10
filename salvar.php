<?php
	
	$id = "";
	$nome = "";
	$nascimento = "";
	$ano = "";
	$materia = "";
	
	if (isset($_POST["id"])) $id = $_POST["id"];
	if (isset($_POST["nome"])) $nome = $_POST["nome"];
	if (isset($_POST["nascimento"])) $nascimento = $_POST["nascimento"];
	if (isset($_POST["ano"])) $ano = $_POST["ano"];
	if (isset($_POST["materia"])) $materia = $_POST["materia"];
	
	$conexao = new mysqli("localhost", "root", "", "escola");
	
	if ($id == 0) {
	
		$stmt = $conexao->prepare("INSERT INTO aluno (nome, nascimento, ano, materia) VALUES (?, ?, ?, ?);");
		
		$stmt->bind_param("ssis", $nome, $nascimento, $ano, $materia);
		
		$stmt->execute();
		
	} else {
		
		$stmt = $conexao->prepare("UPDATE aluno SET nome = ?, nascimento = ?, ano = ?, materia = ? WHERE id = ?");
		
		$stmt->bind_param("ssisi", $nome, $nascimento, $ano, $materia, $id);
		
		$stmt->execute();
		
	}
	
	mysqli_close($conexao);
	
	header("location: index.php");
	
?>