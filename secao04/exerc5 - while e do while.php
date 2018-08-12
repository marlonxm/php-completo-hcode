<?php 
	//WHILE SIGNIFICA (FAÇA ENQUANTO), SERVE PARA PEGAR DADOS DO BANDO DE DADOS.

	$condicao = true;

	while ($condicao) {
		
		$numero = rand(1, 10);

		if ($numero === 6 ) {
			echo "Três!!!!!";

			$condicao = false;
		}
		 echo $numero . " ";

	}


 ?>