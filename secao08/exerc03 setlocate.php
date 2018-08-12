<?php 

	setlocale(LC_ALL, "pt-BR", "pt-BR.utf-8", "portuguese");

	echo ucwords(strftime("%F \n %A"));

	echo "<br>";

	$dia = strftime( "%A");

	echo "Hoje é $dia ";

	//https://secure.php.net/manual/pt_BR/function.strftime.php
	//http://php.net/manual/pt_BR/function.setlocale.php

?>