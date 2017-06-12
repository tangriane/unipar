<?php
error_reporting(false);
require_once("Estado.php");
class Cidade {

	private $idcidade; // private somente para o metodo da classe
	private $nome;
	private $estadoid;
	

	function __construct($nome, $estadoid) {
		$this->nome = $nome;
		
		$this->estadoid = $estadoid;

	}

	public function getId() {
		return $this->idcidade;
	}

	public function setId($idcidade) {
		$this->idcidade = $idcidade;
	}

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}


	public function getEstadoid() {
		return $this->estadoid;
	}

		public function setEstadoid($estadoid) {
		$this->estadoid = $estadoid;
	}

}




?>