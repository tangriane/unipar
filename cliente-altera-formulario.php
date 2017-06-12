<?php
require_once("topo.php");
require_once("class/ClienteDao.php");
require_once("class/CidadeDao.php");

$clienteDao = new ClienteDao($conexao);
$cidadeDao = new CidadeDao($conexao);

$idcliente = $_GET['idcliente'];

$cliente = $clienteDao->buscaCliente($idcliente);
$cidades = $cidadeDao->listaCidade();


?>

<h1>Alterando cliente</h1>
<form action="altera-cliente.php" method="post">
	<input type="hidden" name="idcliente" value="<?=$cliente->getId()?>">
	<table class="table">
		<?php include("cliente-formulario-base.php"); ?>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
