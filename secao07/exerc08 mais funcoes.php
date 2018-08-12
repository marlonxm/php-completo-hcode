<?php 

	function soma(int ...$valores):string {

			return array_sum($valores);

	}
		echo var_dump(soma(2, 2, 5, 6));
		echo "<br>";
		echo soma(25, 26);
		echo "<br>";
		echo soma(62, 24);
		echo "<br>";
		echo soma(2, 2);
		echo "<br>";
		echo soma(2, 2);
		echo "<br>";
		echo soma(2, 2);
		echo "<br>";


?>