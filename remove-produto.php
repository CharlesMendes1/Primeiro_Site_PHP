<?php
require_once'cabecalho.php';
require_once'banco-produto.php';
//include_once'conecta.php';
require_once'logica-usuario.php'; // para pegar Session

$id = $_POST["id"];
removeProduto($conexao,$id);
$_SESSION["success"] = "Produto removido com sucesso!";
header("Location: produto-lista.php"); //redirecionar usuario
die();
?>



<?php

include_once'rodape.php';