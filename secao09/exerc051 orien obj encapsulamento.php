<?php 
	
	class Pessoa {

		public $nome = "Marlon Xavier"; //todos podem ver
		protected $idade = 30; // mesma classes e classes extendidas
		private $senha = "123456"; // somente a mesma classe pode ver


		public function verDados(){
			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}


	
	class Programador extends Pessoa {
		
		
	}



	$objeto = new Programador();

	// echo $objeto->senha . "<br/>";

	$objeto->verDados();




?>