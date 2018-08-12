<?php 
	
	// ADICIONAR ARRAY

	$pessoas = array();


	array_push($pessoas, array(
		'nome'=>'marlon',
		'idade'=> 30,
	));
	array_push($pessoas, array(
		'nome'=>'Beatriz',
		'idade'=> 26,
	));
	//TRANSFORMA ARRAY EM JSON (JSON_ENCODE)
	echo json_encode($pessoas);
 ?>