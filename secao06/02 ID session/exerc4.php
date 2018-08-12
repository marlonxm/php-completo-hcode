<?php 

	require_once("config.php");

	session_regenerate_id(); //gera um novo id.

	echo session_id();

	var_dump($_SESSION);

 ?>