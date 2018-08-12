<?php 

	function ola($texto, $periodo = "Bom dia") {



		return "Ola $texto, $periodo!! <br>";

	}
	echo ola();
	echo ola("");
	echo ola("Marlon", "Boa Noite");
	echo ola("Xavier");
	echo ola("Marques","");



?>