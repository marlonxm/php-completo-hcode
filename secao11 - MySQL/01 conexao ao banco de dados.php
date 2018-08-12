<?php 
	$conn = new mysqli("localhost","root","","bdphp7"); //servidor,usuario,senha,banco de dados

	if ($conn->connect_error) { //ver se tem algum erro na conexao ao bd.
		echo "Erro: " . $conn->connect_error; 
	}

//COMEÇO DA INSERÇÃO NO BANCO DE DADOS
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

	$stmt->bind_param("ss", $login, $pass); 
	//bind_param -> espera o tipo de dados das (interrogações ?)(s=string/i=inteiro/boop=b)
	//user=deslogin / 123456=dessenha = values

	$login = "marlon";
	$pass = "250788";
	$stmt->execute();
//FIM DA INSERÇÃO NO BANCO DE DADOS
 ?>