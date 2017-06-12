<?php
require_once("Cliente.php");

class PessoaJuridica extends Cliente{

	private $cnpj;
	//private $inscricao_estadual;
	//private $razao_social;

     public function getCnpj() {
    return $this->cnpj;
  }
  public function setCnpj($cnpj) {
    $this->cnpj = $cnpj;
  }
	
/*
	public function getInscricaoEstadual() {
		return $this->inscricao_estadual;
	}

	public function setInscricaoEstadual($isncricao_estadual) {
		$this->incricao_estadual = $inscricao_estadual;
	}
	public function getRazaoSocial() {
		return $this->razao_social;
	}

	public function setRazaoSocial($razao_social) {
		$this->razao_social = $razao_social;
	}


	public function validaCNPJ($cnpj) {
   
      if (strlen($cnpj) <> 14)
         return false; 

      $soma = 0;
      
      $soma += ($cnpj[0] * 5);
      $soma += ($cnpj[1] * 4);
      $soma += ($cnpj[2] * 3);
      $soma += ($cnpj[3] * 2);
      $soma += ($cnpj[4] * 9); 
      $soma += ($cnpj[5] * 8);
      $soma += ($cnpj[6] * 7);
      $soma += ($cnpj[7] * 6);
      $soma += ($cnpj[8] * 5);
      $soma += ($cnpj[9] * 4);
      $soma += ($cnpj[10] * 3);
      $soma += ($cnpj[11] * 2); 

      $d1 = $soma % 11; 
      $d1 = $d1 < 2 ? 0 : 11 - $d1; 

      $soma = 0;
      $soma += ($cnpj[0] * 6); 
      $soma += ($cnpj[1] * 5);
      $soma += ($cnpj[2] * 4);
      $soma += ($cnpj[3] * 3);
      $soma += ($cnpj[4] * 2);
      $soma += ($cnpj[5] * 9);
      $soma += ($cnpj[6] * 8);
      $soma += ($cnpj[7] * 7);
      $soma += ($cnpj[8] * 6);
      $soma += ($cnpj[9] * 5);
      $soma += ($cnpj[10] * 4);
      $soma += ($cnpj[11] * 3);
      $soma += ($cnpj[12] * 2); 
      
      
      $d2 = $soma % 11; 
      $d2 = $d2 < 2 ? 0 : 11 - $d2; 
      
      if ($cnpj[12] == $d1 && $cnpj[13] == $d2) {
         return true;
      }
      else {
         return false;
      }

	
	}

}
 /*$cpf = "999.999.999-99";
if (validCPF($cpf)){
  echo "CPF válido.";
} else {
  echo "CPF inválido.";
}*/
 }
?>