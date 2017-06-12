<?php
require_once("topo.php");
require_once("class/EstadoDao.php");
require_once("class/Estado.php");
?>

<table class="table table-striped table-bordered">
<tr>
			<td><h3>Estado</h3></td>
			<td><h3>Sigla<h3></td>
			<td><h3>Alterar<h3></td>
			<td><h3>Excluir<h3></td>
			
			
		</tr>
	<?php
	$estadoDao = new EstadoDao($conexao);

	$estados = $estadoDao->listaEstado($conexao);
	
	foreach($estados as $estado) :
	?>
		<tr>
			<td><?= $estado->getNome() ?></td>
			<td><?= $estado->getSigla() ?></td>
		<td>
				<a class="btn btn-primary" 
					href="estado-altera-formulario.php?idestado=<?=$estado->getId()?>">
					alterar
				</a>
			</td>

			<td>
				<form action="remove-estado.php" method="post">
					<input type="hidden" name="idestado" value="<?=$estado->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>