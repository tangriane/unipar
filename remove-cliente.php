<?php
require_once("topo.php"); 
require_once("class/ClienteDao.php");

$clienteDao = new ClienteDao($conexao);

$idcliente = $_POST['idcliente'];
$clienteDao->removeCliente($idcliente);
$_SESSION["success"] = "Produto removido com sucesso.";

//header("Location: cliente-lista.php");

?>