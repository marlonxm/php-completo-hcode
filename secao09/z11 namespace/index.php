<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Marlon Marques");
	$cad->setEmail("marlonxm@hotmail.com");
	$cad->setSenha("250788");


	$cad->registraVenda();


 ?>