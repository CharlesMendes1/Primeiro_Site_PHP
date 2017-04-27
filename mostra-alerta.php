<?php
session_start();
/*
 * entendi sempre a pagina ta chamando o metodo
 * mais não mostra nada pois a pagina não tem uma sessão 
 * definida ou não tem nada dentro da variavel success 
 */
    function mostraAlerta($tipo){
        if(isset($_SESSION[$tipo])){
        ?>
        <p class="alert-<?= $tipo ?>"><?=$_SESSION[$tipo]?></p>
        <?php
        unset($_SESSION[$tipo]);
        }
        
    }
