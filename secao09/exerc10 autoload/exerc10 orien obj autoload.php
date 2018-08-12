<?php 
///////////////////                      ATENÇÃO            //////////////////////////

							// NORMALMENTE CADA CLASSE É UM ARQUIVO FISICO SEPARADO

			// AUTOLOAD É UMA FUNÇÃO PARA CARREGAR UMA CLASSE AUMOATICAMENTE SEM PREISAR DO REQUIRE

function __autoload($nomeClasse){ //o autoload só procura no mesmo diretorio, e não em pastas. 
	// var_dump($nomeClasse);
	require_once("$nomeClasse.php");
	
	
}




$carro = new Delrey();

$carro -> acelerar(80);
 ?>