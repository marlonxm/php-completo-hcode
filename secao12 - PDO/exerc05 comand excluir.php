<?php 
	$conn = new PDO("mysql:host=localhost;dbname=bdphp7", "root", "");

	//ATUALIZAR
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

	
	$id = 5;

	
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Excluido com Sucesso";

 ?>		