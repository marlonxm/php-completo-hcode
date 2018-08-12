<?php 
	//DO WHILE EXECUTA A FUNÇÃO PELO MENOS 1 VEZ MESMO A CONDIÇÃO SENDO FALSA
	
	$total = 120;

	$desconto = 0.9;

	do {
		$total *= $desconto;

	} while ($total > 100);

	echo $total;

 ?>