<?php 

	$a = 10;

	function trocaValor(&$a) {

		$a += 50;

		return $a;

	}

	echo trocaValor($a);
	echo "<br>";
	echo trocaValor($a);
	echo "<br>";
	echo $a;

	// A = 10  NÃO É O MESMO A = 50, POR AIS QUE ELE ESTAJA DENTRO DA FUNÇÃO.
 ?>