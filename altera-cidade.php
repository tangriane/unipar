<?php
require_once("topo.php");
require_once("class/Estado.php");
require_once("class/Cidade.php");
require_once("class/CidadeDao.php");

//$estado = new Estado();
//$estado->setId($_POST['estadoid']);

$nome = $_POST['nome'];
$estadoid = $_POST['estadoid'];

$cidade = new Cidade($nome, $estadoid); //instancia de uma classe

$cidade->setId($_POST['idcidade']);

$cidadeDao = new CidadeDao($conexao); //instancia de uma classe passando conexão como parametro


if($cidadeDao->alteraCidade($cidade)) { ?> 
	<p class="text-success">A Cidade <?= $cidade->getNome()?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">A cidade <?= $cidade->getNome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>