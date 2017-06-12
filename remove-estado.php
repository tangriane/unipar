<?php
require_once("topo.php");
require_once("class/EstadoDao.php"); 


$estadoDao = new EstadoDao($conexao);

$idestado = $_POST['idestado'];
$estadoDao->removeEstado($idestado); 

$_SESSION["success"] = "Estado removido com sucesso.";
//header("Location: estado-lista.php");


?>