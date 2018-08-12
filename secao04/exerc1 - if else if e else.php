<?php 
	
	$suaIdade = 19;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	//    IF E ELSE
	// if ($suaIdade > $idadeMelhor) {
	// 	echo "é maior";
	// }else{
	// 	echo "não é maior";
	// }

	// IF, ELSE IF E ELSE
	if ($suaIdade < $idadeCrianca) {

		echo "Criança";

	} else if ( $suaIdade < $idadeMaior ) {

		echo "Adolecente";

	} else if ( $suaIdade < $idadeMelhor ) {

		echo "Adulto";

	} else {

		echo "Idoso";

	}



	echo "<br>";


	// OPERADOR TERNÁRIO

	// se 19 < 18 então é Menor se não é maior
	echo ($suaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";
 ?>