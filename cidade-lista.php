<?php
require_once("topo.php");
require_once("class/CidadeDao.php");
?>

<table class="table table-striped table-bordered">
	<tr>
			<td><h3>Cidade</h3></td>
			<td><h3>Estado<h3></td>
			<td><h3>Alterar<h3></td>
			<td><h3>Excluir<h3></td>
			
			
		</tr>
	<?php
	$cidadeDao = new CidadeDao($conexao);
	$cidades = $cidadeDao->listaCidade();


	foreach($cidades as $cidade) : 

	?>
		<tr>
			<td><?= $cidade->getNome() ?></td>
			<td><?= $cidade->getEstadoid(); ?></td>
			
			<td>
				<a class="btn btn-primary" 
					href="cidade-altera-formulario.php?idcidade=<?=$cidade->getId()?>">
					alterar
				</a>
			</td>
			<td>
				<form action="remove-cidade.php" method="post">
					<input type="hidden" name="idcidade" value="<?=$cidade->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>