<?php
require_once("topo.php");
require_once("class/ClienteDao.php");
?>

<table class="table table-striped table-bordered">
	<tr>
			<td><h3>Nome</h3></td>
			<td><h3>Endereço<h3></td>
			<td><h3>Idade<h3></td>
			<td><h3>Cep<h3></td>
			<td><h3>Ação<h3></td>
			<td><h3>Excluir<h3></td>
			
			
		</tr>

	<?php
	$clienteDao = new ClienteDao($conexao);
	$clientes = $clienteDao->listaCliente();





	foreach($clientes as $cliente) :
?>
		<tr>
			<td><?= $cliente->getNome() ?></td>
			<td><?= $cliente->getEndereco() ?></td>
			<td><?= $cliente->getIdade() ?></td>
			<td><?= $cliente->getCep() ?></td>
			
		
			
			<td>
				<a class="btn btn-primary" 
					href="cliente-altera-formulario.php?idcliente=<?=$cliente->getId()?>">
					alterar
				</a>
			</td>
			<td>
				<form action="remove-cliente.php" method="post">
					<input type="hidden" name="idcliente" value="<?=$cliente->getId()?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>