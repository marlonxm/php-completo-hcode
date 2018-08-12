<?php 

	interface Veiculo {

		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocaMarcha($marcha);

	}


	class Civic implements Veiculo {
		public function acelerar($velocidade) {
			echo "O veículo acelelou até " . $velocidade . " km/h.";
		}

		public function frenar($velocidade){
			echo "O Veiculo frenou em " . $velocidade . " km/h.";
		}

		public function trocaMarcha($marcha){
			echo "O veículo engatou a marcha " . $marcha;
		}




	}

	$carro = new Civic();

	$carro -> acelerar(100);
	echo "<br/>";
	$carro->frenar(110);
	echo "<br/>";

?>