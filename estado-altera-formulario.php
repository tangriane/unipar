<?php
require_once("topo.php");
require_once("class/EstadoDao.php");


$estadoDao = new EstadoDao($conexao);
//$categoriaDao = new CategoriaDao($conexao);

$idestado = $_GET['idestado'];

$estado = $estadoDao->buscaEstado($idestado);
//$categorias = $categoriaDao->listaCategorias();

/*$selecao_usado = $produto->isUsado() ? "checked='checked'" : "";
$produto->setUsado($selecao_usado);
*/
?>

<h1>Alterando Estados</h1>
<form action="altera-estado.php" method="post">
	<input type="hidden" name="idestado" value="<?=$estado->getId()?>">
	
	<table class="table">
		<?php include("estado-formulario-base.php"); ?>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>