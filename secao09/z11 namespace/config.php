<?php 

	spl_autoload_register(function($nameClass){

		$dirClass = "class";
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
		//$filename = str_replace ("\\", "/", "classes" . DIRECTORY_SEPARATOR . $nome . ".php"); 

		if(file_exists($filename)){
			require_once($filename);

		}
	});


?>