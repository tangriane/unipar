<?php
require_once("topo.php");
require_once("class/Cliente.php");
require_once("class/Cidade.php");
require_once("class/CidadeDao.php");
//require_once("logica-usuario.php");

//verificaUsuario();

$cidade = new Cidade();
$cidade->setId(1);

$cliente = new Cliente("", "", "", $cidade, "");

$cidadeDao = new CidadeDao($conexao);

$cidades = $cidadeDao->listaCidade();

?>	

<h1>Formulário de Cliente</h1>
<form action="adiciona-cliente.php" method="post">
	<table class="table">
		
		<?php include("cliente-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>




























