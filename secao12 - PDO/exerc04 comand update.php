<?php 
	$conn = new PDO("mysql:host=localhost;dbname=bdphp7", "root", "");

	//ATUALIZAR
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "Marcos";
	$password = "olamundo";
	$id = 4;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Alteração com Sucesso";

 ?>		