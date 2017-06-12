<?php
require_once("Cliente.php");
class PessoaFisica extends Cliente {

	private $cpf;
	//private $rg;
	//private $sexo;
	//private $data_nasc


  public function getCpf() {
    return $this->cpf;
  }
  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }

/*
	public function getRg() {
		return $this->rg;
	}
	public function setRg($rg) {
		$this->rg = $rg;
	}

	

/*
	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}	



	public function getDataNasc() {
		return $this->data_nasc;
	}
	public function setDataNasc($data_nasc) {
		$this->data_nasc = $data_nasc;
	}







/*



	public function valideCPF($cpf){
  // determina um valor inicial para o digito $d1 e $d2
  // pra manter o respeito ;)
	$d1 = 0;
	$d2 = 0;
  // remove tudo que não seja número
  $cpf = preg_replace("/[^0-9]/", "", $cpf);
  // lista de cpf inválidos que serão ignorados
  $ignore_list = array(
    '00000000000',
    '01234567890',
    '11111111111',
    '22222222222',
    '33333333333',
    '44444444444',
    '55555555555',
    '66666666666',
    '77777777777',
    '88888888888',
    '99999999999'
  );
  // se o tamanho da string for dirente de 11 ou estiver
  // na lista de cpf ignorados já retorna false
  if(strlen($cpf) != 11 || in_array($cpf, $ignore_list)){
      return false;
  } else {
    // inicia o processo para achar o primeiro
    // número verificador usando os primeiros 9 dígitos
    for($i = 0; $i < 9; $i++){
      // inicialmente $d1 vale zero e é somando.
      // O loop passa por todos os 9 dígitos iniciais
      $d1 += $cpf[$i] * (10 - $i);
    }
    // acha o resto da divisão da soma acima por 11
    $r1 = $d1 % 11;
    // se $r1 maior que 1 retorna 11 menos $r1 se não
    // retona o valor zero para $d1
    $d1 = ($r1 > 1) ? (11 - $r1) : 0;
    // inicia o processo para achar o segundo
    // número verificador usando os primeiros 9 dígitos
    for($i = 0; $i < 9; $i++) {
      // inicialmente $d2 vale zero e é somando.
      // O loop passa por todos os 9 dígitos iniciais
      $d2 += $cpf[$i] * (11 - $i);
    }
    // $r2 será o resto da soma do cpf mais $d1 vezes 2
    // dividido por 11
    $r2 = ($d2 + ($d1 * 2)) % 11;
    // se $r2 mair que 1 retorna 11 menos $r2 se não
    // retorna o valor zeroa para $d2
    $d2 = ($r2 > 1) ? (11 - $r2) : 0;
    // retona true se os dois últimos dígitos do cpf
    // forem igual a concatenação de $d1 e $d2 e se não
    // deve retornar false.
    return (substr($cpf, -2) == $d1 . $d2) ? true : false;

    // paara usar 
/*
$cpf = "999.999.999-99";
if (validCPF($cpf)){
  echo "CPF válido.";
} else {
  echo "CPF inválido.";
}
*/
  	

}

?>