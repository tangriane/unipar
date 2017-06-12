<?php 
require_once("class/Estado.php");
require_once("class/Cidade.php");

class CidadeDao {

	private $conexao;

	function __construct($conexao) { //metodo magico que executa a conexao
		$this->conexao = $conexao;
	}

	function listaCidade() { //metodo da classe Dao

		$cidades = array();
		$resultado = mysqli_query($this->conexao, "select c.*,e.nome as estado_nome from cidade as c join estado as e on e.idestado = c.estado_id");
		


		while($cidade_array = mysqli_fetch_assoc($resultado)) {
		

			//$estado = new Estado();
			//$estado->setNome($cidade_array['estado_nome']);

			$nome = $cidade_array['nome'];
			$estadoid = $cidade_array['estado_id'];
	
			$cidade = new Cidade($nome, $estadoid);
			$cidade->setId($cidade_array['idcidade']);

			array_push($cidades, $cidade);

			
		}
	
		return $cidades;

	}

	function insereCidade(Cidade $cidade) {


		$query = "insert into cidade (nome, estado_id) values ('{$cidade->getNome()}', '{$cidade->getEstadoid()}')";

		return mysqli_query($this->conexao, $query);
	}

	function alteraCidade(Cidade $cidade) {

		//update cidade set nome = 'ewwerwerwerwerwerwerwer', estado_id = 1 WHERE idcidade = 1

		$query = "update cidade set nome = '{$cidade->getNome()}', estado_id= {$cidade->getEstadoid()} where idcidade = {$cidade->getId()}";

		return mysqli_query($this->conexao, $query);
	}

	function buscaCidade($idcidade) {

		$query = "select * from cidade where idcidade = {$idcidade}";
		$resultado = mysqli_query($this->conexao, $query);
		$cidade_buscado = mysqli_fetch_assoc($resultado);

		$estado = new Estado();
		$estado->setId($cidade_buscado['estado_id']);

		$nome = $cidade_buscado['nome'];
		
			$cidade = new Cidade($nome, $estado);
		

		$cidade->setId($cidade_buscado['idcidade']);

		return $cidade;
	}

	function removeCidade($idcidade) {

		$query = "delete from cidade where idcidade = {$idcidade}";

		return mysqli_query($this->conexao, $query);
	}
}

?>
