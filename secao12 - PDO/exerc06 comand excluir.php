<?php 
	$conn = new PDO("mysql:host=localhost;dbname=bdphp7", "root", "");

	$conn->beginTransaction();

	//ATUALIZAR
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

	
	$id = 1;

	
	

	$stmt->execute(array($id));

	// $conn->rollback(); // SE DER ERRADO A TRANSAÇÃO
	$conn->commit(); //SE DER CERTO A TRANSAÇÃO

	echo "Excluido com Sucesso";

 ?>		