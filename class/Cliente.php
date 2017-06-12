<?php

class Cliente 	{

	private $idcliente;
	private $nome;
	private $endereco;
	private $idade;
	private $cidadeid;
	private $cep;

	
	function __construct($nome, $endereco, $idade, Cidade $cidadeid, $cep)	{
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->idade = $idade;
		$this->cidadeid = $cidadeid;
		$this->cep = $cep;
	}

	public function getId(){
		return $this->idcliente;
	}
	public function setId($idcliente){
	$this->idcliente = $idcliente;
	 }

	 public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
	$this->nome = $nome;
	 }

	  public function getEndereco(){
		return $this->endereco;
	}
	public function setEndereco($endereco){
	$this->endereco = $endereco;
	 }
	  public function getIdade(){
		return $this->idade;
	}
	public function setIdade($idade){
	$this->idade = $idade;
	 }

	  public function getCidadeid(){
		return $this->cidadeid;
	}
	public function setCidadeid($cidadeid){
	$this->cidadeid = $cidadeid;
	 }	 


	  public function getCep(){
		return $this->cep;
	}
	public function setCep($cep){
	$this->cep = $cep;
	 }	 




	  public function temCpf() {
    return $this instanceof PessoaFisica;
}

public function temCnpj() {
    return $this instanceof PessoaJuridica;
}

public function atualizaBaseadoEm($params) {
 /*   if ($this->temIsbn()) {
        $this->setIsbn($params["isbn"]);
    }*/

    if ($this->temCpf()) {
        $this->setCpf($params["cpf"]);
    }
    if ($this->temCnpj()) {
        $this->setCnpj($params["cnpj"]);
    }
}

}