<?php
    require_once'cabecalho.php';
    //include_once'conecta.php';
    require_once'banco-produto.php';
    require_once'banco-categoria.php';
   // include_once 'mostra-alerta.php';
    $produtos = listaProdutos($conexao);
?>
<?php
    //mostraAlerta("success"); Ta no final do cabeçalho
?>
<table class="table table-striped table-bordered">
    <?php
    foreach($produtos  as $produto):
    ?>    
    <tr>
        <td><?= $produto['nome']?></td>
        <td><?= $produto['preco']?></td>
        <td><?= substr($produto['Descricao'], 0, 40)?></td>
        <td><?= $produto['categoria_nome']?></td>
        <!--produto-altera-formulario.php-->
        
        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
        <td>
            <form action="remove-produto.php" method="POST">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>
    
    <?php
    
    endforeach
    ?>
</table>   


<?php    include_once'rodape.php';