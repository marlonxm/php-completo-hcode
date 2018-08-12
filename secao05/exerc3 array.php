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

	print_r($pessoas[1]['idade']);
 ?>