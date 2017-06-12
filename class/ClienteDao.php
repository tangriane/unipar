<?php 
require_once("class/ClienteFactory.php");
require_once("class/Cidade.php");

class ClienteDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaCliente() {

		$clientes = array();
		$resultado = mysqli_query($this->conexao, "select cl.*,c.nome as cidade_nome from cliente as cl join cidade as c on c.idcidade=cl.cidade_id");



		while($cliente_array = mysqli_fetch_assoc($resultado)) {

			$tipoCliente = $cliente_array['tipoCliente'];
			$cliente_id = $cliente_array['idcliente'];
			$cidade_nome = $cliente_array['cidade_nome'];
			

			$factory = new clienteFactory();
			$cliente = $factory->criaPor($tipoCliente, $cliente_array);
			$cliente->atualizaBaseadoEm($cliente_array);

			$cliente->setId($cliente_id);
			$cliente->getCidadeid()->setNome($cidade_nome);
		
			array_push($clientes, $cliente);
		}
	

		return $clientes;
	}

	function insereCliente(Cliente $cliente) {

		/*$isbn = "";
		if($cliente->temIsbn()) {
			$isbn = $cliente->getIsbn();
		}*/

		$cpf = "";
		if($cliente->temCpf()) {
			$cpf = $cliente->getCpf();
		}

		$cnpj = "";
		if($cliente->temCnpj()) {
			$cnpj = $cliente->getCnpj();
		}

		$tipoCliente = get_class($cliente);


		$query = "insert into cliente (nome, endereco, idade, cidade_id, cep, tipoCliente, cpf, cnpj)
					values ('{$cliente->getNome()}', '{$cliente->getEndereco()}', 
						'{$cliente->getIdade()}', '{$cliente->getCidadeid()->getId()}',
						'{$cliente->getCep()}', '{$tipoCliente}', '{$cpf}', '{$cnpj}')";

		return mysqli_query($this->conexao, $query);
	}

	function alteraCliente(Cliente $cliente) {

		/*$isbn = "";
		if($cliente->temIsbn()) {
			$isbn = $cliente->getIsbn();
		}*/

		$cpf = "";
		if($cliente->temCpf()) {
			$cpf = $cliente->getCpf();
		}

		$cnpj = "";
		if($cliente->temCnpj()) {
			$cnpj = $cliente->getCnpj();
		}

		$tipoCliente = get_class($cliente);

		
		$query = "update cliente set nome = '{$cliente->getNome()}', 
		 endereco = '{$cliente->getEndereco()}', 
		 idade = {cliente->getIdade()}, 
		 cidade_id= '{$cliente->getCidadeid()}', 
		  cep = '{cliente->getCep()}',
		  tipoCliente = '{$tipoCliente}', 
		  cpf = '{$cpf}', cnpj = '{$cnpj}' 
								where idcliente = '{$cliente->getId()}'";

		return mysqli_query($this->conexao, $query);
	}

	function buscaCliente($idcliente) {

		$query = "select * from cliente where idcliente = {$idcliente}";
		$resultado = mysqli_query($this->conexao, $query);
		$cliente_buscado = mysqli_fetch_assoc($resultado);

		$tipoCliente = $cliente_buscado['tipoCliente'];
		$cliente_id = $cliente_buscado['idcliente'];
		$cidade_id = $cliente_buscado['cidadeid'];

		$factory = new clienteFactory();
		$cliente = $factory->criaPor($tipoCliente, $cliente_buscado);
		$cliente->atualizaBaseadoEm($cliente_buscado);

		$cliente->setId($cliente_id);
		$cliente->getCidadeid()->setId($ciadadeid);

		return $cliente;
	}

	function removeCliente($idcliente) {

		$query = "delete from cliente where idcliente = {$idcliente}";

		return mysqli_query($this->conexao, $query);
	}
}

?>