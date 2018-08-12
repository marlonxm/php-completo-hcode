<?php 
	$conn = new PDO("mysql:host=localhost;dbname=bdphp7","root", "");

	// if (isset($conn)) {
	// 	echo "deu certo a conxao";
	// }



	//INSERIR
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORd)");

	$login = "Marlindo";
	$password = "06500826602";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORd", $password);

	$stmt->execute();

	echo "Ok";

 ?>		