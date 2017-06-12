<?php
require_once("topo.php");
require_once("class/CidadeDao.php");
require_once("class/EstadoDao.php");

$cidadeDao = new CidadeDao($conexao);
$estadoDao = new EstadoDao($conexao);

$idcidade = $_GET['idcidade'];

$cidade = $cidadeDao->buscaCidade($idcidade);
$estados = $estadoDao->listaEstado();

?>

<h1>Alterando produto</h1>
<form action="altera-cidade.php" method="post">
	<input type="hidden" name="idcidade" value="<?=$cidade->getId()?>">
	<table class="table">
		<?php include("cidade-formulario-base.php"); ?>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
