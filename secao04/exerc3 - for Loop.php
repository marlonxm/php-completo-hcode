<?php 
	// $=0 e enquanto $i for menos que 10, ele soma 1
	
	// valor inicial - conta até 10 - soma 1
	for ($i=1; $i <= 10; $i++) { 
		echo $i . "<br>";
	}

	// valor inicial - conta até 1000 - conta de 20 em 20
	for ($i=0; $i <= 1000; $i+=20) { 

		if ($i > 200 && $i < 800) {
			continue; //ele não mostra na tela os valor que estão entre eles.
		}
		
		if ($i === 900) {
			break;
		}
		echo $i . "<br>";
	}

 ?>