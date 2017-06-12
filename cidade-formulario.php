<?php
require_once("topo.php");
require_once("class/Estado.php");
require_once("class/Cidade.php");
require_once("class/EstadoDao.php");
//require_once("logica-usuario.php");

//verificaUsuario();

$estado = new Estado();
$estado->setId(1);

$cidade = new Cidade("", $estado);

$estadoDao = new EstadoDao($conexao);

$estados = $estadoDao->listaEstado();

?>	

<h1>Formulário de Cidade</h1>
<form action="adiciona-cidade.php" method="post">
	<table class="table">
		
		<?php include("cidade-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>