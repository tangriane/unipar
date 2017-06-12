<?php 
require_once("topo.php");
require_once("class/ClienteFactory.php");
require_once("class/ClienteDao.php");
require_once("class/Cidade.php");

$tipoCliente = $_POST['tipoCliente'];
$cidadeid = $_POST['cidadeid'];

$factory = new ClienteFactory();
$cliente = $factory->criaPor($tipoCliente, $_POST);
$cliente->atualizaBaseadoEm($_POST);

$cliente->getCidadeid()->setId($cidadeid);



$clienteDao = new ClienteDao($conexao);
if($clienteDao->insereCliente($cliente)) { ?>

	<p class="text-success">O Cliente <?= $cliente->getNome() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $cliente->getNome() ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>