<?php 

	$dt = new DateTime();

	$periodo = new DateInterval("P15D"); //ADICIONAR 15 DIAS

	echo $dt->format("d/m/Y  H:i:s");

	$dt->add($periodo); //FUNÇÕA SOMAR 15 DIAS DO $DT

	echo "<br>";

	echo $dt->format("d/m/Y  H:i:s");


 ?>