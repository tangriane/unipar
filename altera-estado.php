<?php
require_once("topo.php");
require_once("class/Estado.php");
require_once("class/EstadoDao.php");

//$categoria = new Categoria();
//$categoria->setId($_POST['categoria_id']);

$nome = $_POST['nome'];
$sigla = $_POST['sigla'];
//$descricao = $_POST['descricao'];
//$isbn = $_POST['isbn'];
//$tipoProduto = $_POST['tipoProduto'];

/*if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

if ($tipoProduto == "Livro") {
	$produto = new Livro($nome, $preco, $descricao, $categoria, $usado);
	$produto->setIsbn($isbn);
} else {
	$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
}
*/
	$estado = new Estado($nome, $sigla);

$estado->setId($_POST['idestado']);

$estadoDao = new EstadoDao($conexao);

if($estadoDao->alteraEstado($estado)) { ?>
	<p class="text-success">O produto <?= $estado->getNome() ?>, <?= $estado->getSigla() ?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $estado->getNome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>