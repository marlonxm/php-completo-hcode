<?php 
	
		//FOREACH SIGNIFICA (PARA CADA)


	$meses = array(
		"Janeiro","Fevereiro","Março",
		"Abriu","Maio","Junho",
		"Julho","Agosto","Setembro",
		"Outubro","Novembro","Dezembro"
	);

	// foreach ($meses as $mes) {
	foreach ($meses as $index => $mes) {
		echo "Indice: " . $index . "<br>";		
	
		echo "O mês é: " . $mes . "<br><br>";


	}

 ?>