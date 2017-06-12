<?php
require_once("class/Estado.php");
class EstadoDao {
	
	private $conexao;

	function __construct($conexao){
		$this->conexao = $conexao;
	
	
	}
	

function insereEstado(Estado $estado) {
	$query = "insert into estado (nome, sigla) 
					values ('{$estado->getNome()}', '{$estado->getSigla()}')";

		return mysqli_query($this->conexao, $query);
}


	function listaEstado() {

		$estados = array();
		$resultado = mysqli_query($this->conexao, "select * from estado");

		while($estado_array = mysqli_fetch_assoc($resultado)) {

			

		$nome = $estado_array['nome'];
		$sigla = $estado_array['sigla'];
		

		$estado = new Estado($nome, $sigla);
		$estado->setId($estado_array['idestado']);

		array_push($estados, $estado);
	}

	return $estados;
}

function alteraEstado(Estado $estado) {

		
	

		$query = "update estado set nome = '{$estado->getNome()}', 
			sigla = '{$estado->getSigla()}' where idestado = '{$estado->getId()}'";

		return mysqli_query($this->conexao, $query);
	}




	function buscaEstado($idestado) {

		$query = "select * from estado where idestado = {$idestado}";
		$resultado = mysqli_query($this->conexao, $query);
		$estado_buscado = mysqli_fetch_assoc($resultado);

		

		$nome = $estado_buscado['nome'];
		$sigla = $estado_buscado['sigla'];

	$estado = new Estado($nome, $sigla);
	 $estado->setId($estado_buscado['idestado']);

		return $estado;
	}



	function removeEstado($idestado) {

		$query = "delete from estado where idestado = {$idestado}";

		return mysqli_query($this->conexao, $query);
	}

}


?>