<?php 
require_once("topo.php");
//require_once("class/Estado.php");
require_once("class/Cidade.php");
require_once("class/CidadeDao.php");
//require_once("logica-usuario.php");

//verificaUsuario();

//$estado = new Estado();

//$estado->setId($_POST['estadoid']);

$nome = $_POST['nome'];
$estadoid = $_POST['estadoid'];


$cidade = new Cidade($nome, $estadoid);


$cidadeDao = new CidadeDao($conexao);

if($cidadeDao->insereCidade($cidade)) { ?>
	<p class="text-success">A Cidade <?= $cidade->getNome() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O cidade <?= $cidade->getNome() ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>