<?php 

	$json = '[{"nome":"marlon","idade":30},{"nome":"Beatriz","idade":26}]';

	$data = json_decode($json, true);

	var_dump($data);


	//TRANSFORMA O JSON EM ARRAY (JSON_DECODE)



 ?>