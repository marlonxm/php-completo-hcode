<?php 

//	criado o diretorio images
	$name = "images";

	if (!is_dir($name)) { //ver se uma pasta ou diretorio existe
		
		mkdir($name); // CRIA O DIRETORIO
		echo "Diretorio cirado com sucesso"; 
	// }else{

	// 	rmdir($name); //REMOVER ALGUM DIRETÓRIO
	// 	echo "já existe: $name foi removido";

	// }




 ?>