<?php
require_once("topo.php");
require_once("class/ClienteDao.php");
require_once("class/ClienteFactory.php");

$tipoCliente = $_POST['tipoCliente'];
$cliente_id = $_POST['idcliente'];
$clidade_id = $_POST['cidadeid'];

$factory = new ClienteFactory();
$cliente = $factory->criaPor($tipoCliente, $_POST);
$cliente->atualizaBaseadoEm($_POST);

$cliente->setId($cliente_id);
$cliente->getCidadeid()->setId($cidade_id);


$clienteDao = new ClienteDao($conexao);

if($clienteDao->alteraCliente($cliente)) { ?>
	<p class="text-success">O cliente <?= $cliente->getNome() ?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O cliente <?= $cliente->getNome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>