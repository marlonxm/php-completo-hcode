<?php 
	// metodo construtor
	

	class Endereco {
		private $logradouro;
		private $numero;
		private $cidade;


		public function __construct($a, $b, $c){
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __destruct(){
			//var_dump("destruir");
		}

		public function __toString(){
			return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
		}

	}

	$meuEndereco = new Endereco("Rua Assai","560","Maringá");

	// var_dump($meuEndereco);
	// unset($meuEndereco);

	echo $meuEndereco;
 ?>