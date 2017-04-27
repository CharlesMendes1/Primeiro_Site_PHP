<?php
session_start();
function usuarioEstaLogado(){
    //verificar se ele está logado
    
   //return isset($_COOKIE['usuario_logado']);
    return isset($_SESSION['usuario_logado']);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
    $_SESSION["danger"]="Você não tem acesso a esta funcionalidade!";
    header("Location: index.php");
    die();
    } 
}

function usuarioLogado(){
    //método que extrai o usuário logado
    return $_SESSION["usuario_logado"];
}

function verificaGetFalhaDeSegurança(){
    return isset($_GET['falhaDeSegurança']);
}
function  logaUsuario($email){
    //função para CRIAR COOKIES
   //setcookie("usuario_logado",$email,time()+60);
   $_SESSION["usuario_logado"] = $email;
}

function logout(){
    session_destroy();
    session_start();
}