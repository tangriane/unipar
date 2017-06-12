<?php 
require_once("topo.php");
require_once("class/EstadoDao.php");
//require_once("logica-usuario.php");
require_once("class/Estado.php");
//require_once("class/Categoria.php");

//verificaUsuario();

//$categoria = new Categoria();
//$categoria->setId($_POST['categoria_id']);

$nome = $_POST['nome'];
$sigla = $_POST['sigla'];



$estado = new Estado($nome, $sigla);

$estadoDao = New EstadoDao($conexao);

if($estadoDao->insereEstado($estado)) { ?>
	<p class="text-success">O estado <?= $estado->getNome() ?>, <?= $estado->getSigla() ?> foi adicionado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O estado <?= $estado->getNome() ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>