<?php 

	abstract class Animal {
		public function falar(){
			return "Som";
		}
		public function mover(){
			return "Andar";
		}
	}

	class Cachorro extends Animal{
		public function falar(){
			return "Lati";
		}
	}

	class Gato extends Animal{
		public function falar() {
			return "Mia";
		}
		public function mover() {
			return "Corre muitoooooo";
		}
	}
	
	class Passaro extends Animal{
		public function falar(){ 
			return "Canta";
		}
		public function mover(){
			return "Avoa e " . parent::mover(); //parent -> puxa o elemento da classe pai
		}
	}	

	$pluto = new Cachorro();
	$nino = new Gato();
	$pinto = new Passaro();
	
		
	

	echo $pluto -> falar() . "<br>";
	echo $pluto -> mover() . "<br>";
	echo "----------------------------------<br>";
	echo $nino -> falar() . "<br>";
	echo $nino -> mover(). "<br>";
	echo "----------------------------------<br>";
	echo $pinto -> falar() . "<br>";
	echo $pinto -> mover(). "<br>";



	///////////////////                      ATENÇÃO            //////////////////////////

							// NORMALMENTE CADA CLASSE É UM ARQUIVO FISICO SEPARADO
 ?>