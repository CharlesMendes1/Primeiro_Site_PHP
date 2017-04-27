<?php 
require_once 'cabecalho.php';
require_once 'logica-usuario.php'; // vai precisar do log usuario pois usa as funções dele   

  
    //LOGADO e DESLOGADO
    //mostraAlerta("success"); ta no final do cabeçalho
    
    
    if(usuarioEstaLogado()){
    ?>
        <p clss="text-sucess">Você esta logado como <?= usuarioLogado()?></p>
        <a href="logout.php">Deslogar</a>
    <?php
    
    }else{
        //CADASTRAR
        mostraAlerta("danger");
        ?>
        <h1 class="text-center">Bem Vindo!</h1>
        <h2 class="text-center">Login</h2>
        <form action="login.php" method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Login</button></td>
                </tr>
            </table>
        </form>
     <?php 
     }
     
     
     include_once 'rodape.php';?>