<?php
ini_set('display_errors', 0 );
error_reporting(0);

//require_once("mostra-alerta.php"); 

function carregaClasse($nomeDaClasse){
require_once("class/".$nomeDaClasse.".php");

}
spl_autoload("carregaClasse");

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once("conecta.php"); 
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Meu Cadastro</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Unipar</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="estado-formulario.php">Adiciona Estado</a></li>
					<li><a href="cidade-formulario.php">Adiciona Cidade</a></li>
					<li><a href="cliente-formulario.php">Adiciona Cliente</a></li>
					<li><a href="estado-lista.php">Estado</a></li>
					<li><a href="cidade-lista.php">Cidade</a></li>
					<li><a href="cliente-lista.php">Cliente</a></li>
					
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">
			<?php//  mostraAlerta("success"); ?>
			<?php //mostraAlerta("danger"); ?>
