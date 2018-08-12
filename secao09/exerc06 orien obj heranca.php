<?php 

	//PESQUISAR SOBRE UML.
	
	class Documento {

		private $numero;

		public function getNumero() {
			return $this->numero;
		}

		public function setNumero($n) {
			$this->numero = $n;
		}
	}


	class RG extends Documento	{
		
		public function validar():bool {

			$numeroCPF = $this->getNumero();



			//validaçõ de CPF
			return true;
		}

	}

	$doc = new RG();
	$doc->setNumero("12345678912");
	var_dump($doc->validar());
	echo "<br/>";

	echo $doc->getNumero();

 ?>