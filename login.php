<?php
//include_once 'conecta.php'; // chamei a conexão do banco
require_once'banco-usuario.php';//funções para mexer no BD
require_once'cabecalho.php';
require_once 'logica-usuario.php';
$usuario = buscaUsuario($conexao,$_POST['email'],$_POST['senha']); #criada para fazer uma busca no BD para verifacar a existencia do usuario

if($usuario == NULL):
    $_SESSION["danger"] = "Usuário ou senha inválida!";
    header("Location: index.php");
else:
     logaUsuario($usuario['email']);
   //setcookie criando cookie com nome usuario logado
    $_SESSION["success"] = "Logado com sucesso!";
    header("Location: index.php");
endif;
die();


include_once'rodape.php';