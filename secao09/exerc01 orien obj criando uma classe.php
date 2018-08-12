<?php 
	
	class Pessoa {

		public $nome; //Atributo

		public function falar(){ //Método

			return "O meu nome é " .$this->nome; //atributo dentro do étodo escreve assim mesmo

		}

	}

	$marlon = new Pessoa();
	$marlon->nome = "Marlon Marques";
    echo $marlon->falar();




 ?>