<?php
require_once("topo.php");
//require_once("banco-categoria.php");
//require_once("logica-usuario.php");
require_once("class/Estado.php");
//require_once("class/Categoria.php");

//verificaUsuario();

//$categoria = new Categoria();
//$categoria->setId(1);

$estado = new Estado("", "");

//$categorias = listaCategorias($conexao);

?>	

<h1>Formulário de Estado</h1>
<form action="adiciona-estado.php" method="post">
	<table class="table">
		
		<?php include("estado-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>