<?php
	
	$id = "";
	
	if (isset($_GET["id"])) $id = $_GET["id"];
	
	$conexao = new mysqli("localhost", "root", "", "escola");
	
	$stmt = $conexao->prepare("DELETE FROM aluno WHERE id = ?");
	
	$stmt->bind_param("i", $id);
	
	$stmt->execute();
	
	mysqli_close($conexao);
	
	header("location: index.php");
	
?>