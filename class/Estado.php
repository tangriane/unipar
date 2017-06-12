<?php

class Estado{


	private $idestado;
	private $nome;
	private $sigla;
	
	function __construct($nome,$sigla)	{
		$this->nome = $nome;
		$this->sigla = $sigla;
	}

	public function getId(){
		return $this->idestado;
	}
	public function setId($idestado){
	$this->idestado = $idestado;
	 }

	 public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
	$this->nome = $nome;
	 }
	  public function getSigla(){
		return $this->sigla;
	}
	public function setSigla($sigla){
	$this->sigla = $sigla;
	 }


}

?>