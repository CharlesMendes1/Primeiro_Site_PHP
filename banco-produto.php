<?php
    require_once 'conecta.php';
    
     function insereProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado){
       $nome = mysqli_real_escape_string($conexao, $nome);
       $query = "insert into produtos (nome,preco,Descricao,categoria_id,usado) values('{$nome}',{$preco},'{$descricao}',{$categoria_id},{$usado})";
       //var_dump($query);
       $resultadoInsercao = mysqli_query($conexao, $query);
       return $resultadoInsercao;

    }
    function listaProdutos($conexao){
           $produtos = [];
           $resultBanco = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");
           while($linhadoProduto = mysqli_fetch_assoc($resultBanco)){
               array_push($produtos, $linhadoProduto);
           }  
           return $produtos;
       }
    function buscaProduto($conexao,$id){
        $query = "select * from produtos where id = {$id}";
        $result = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($result);
    }
    function alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id,$usado){
        $query = "update produtos set nome ='{$nome}', preco={$preco}, Descricao = '{$descricao}', categoria_id= {$categoria_id},usado = {$usado} where id = {$id} ";
        return mysqli_query($conexao, $query);    
    }
   
    
    function removeProduto($conexao,$id){
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }
        