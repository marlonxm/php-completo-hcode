<?php 
	
	$meuImc = 18;

	$magro 			= 18;
	$ideal 			= 28;
	$gordo 			= 40;
	$gordoMorbido 	= 45;


	if ($meuImc < $magro ) {

		echo "Sou muito magro";

	} else if ($meuImc < $ideal) {

		echo "Estou no peso ideal";

	} else if ($meuImc < $gordo) {

		echo "estou gordinho";

	} else if ($meuImc < $gordoMorbido) {

		echo "tome cuidado";

	} else {

		echo "Extreeeemamente gordooooo";

	}



 ?>