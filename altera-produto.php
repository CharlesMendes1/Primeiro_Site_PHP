<?php
        require_once 'cabecalho.php';
        //include_once 'conecta.php'; // conetando BD
        require_once'banco-produto.php'; // todos metodos
        
        $id = $_POST['id'];
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $categoria_id = $_POST['categoria_id'];
        
        if(array_key_exists('usado', $_POST)){
            $usado = "true";
        }else{
            $usado = "false";
        }
        //$sucesso = insereProduto($conexao, $nome, $preco);
  
        if( alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) ){
    ?>
        <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> alterado com sucesso!</p>
    <?php
        } else {
            $erro = mysqli_error($conexao);
    ?>
        <p class="text-danger">O produto <?= $nome; ?> não foi alterado<br/>Erro: <?= $erro; ?></p>
    <?php
        }

    ?>
            
<?php include_once 'rodape.php';?>