<?php 
	$conn = new mysqli("localhost","root","","bdphp7"); //servidor,usuario,senha,banco de dados

	if ($conn->connect_error) { //ver se tem algum erro na conexao ao bd.
		echo "Erro: " . $conn->connect_error; 
	}



	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	while ($row = $result->fetch_assoc()) {
		var_dump($row);
	}

 ?>