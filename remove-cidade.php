<?php
require_once("topo.php"); 
require_once("class/CidadeDao.php"); 

$cidadeDao = new CidadeDao($conexao);

$idcidade = $_POST['idcidade'];
$cidadeDao->removeCidade($idcidade);
//$_SESSION["success"] = "Cidade removido com sucesso.";
header("Location: cidade-lista.php");


?>