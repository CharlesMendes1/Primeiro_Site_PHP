<?php
require_once 'cabecalho.php';
//include_once 'conecta.php';
require_once 'banco-categoria.php';
require_once 'banco-produto.php';

$id = $_GET['id'];
$ProdutoDoID = buscaProduto($conexao,$id);
$itemUsado = $ProdutoDoID['usado']? "checked='checked' ": " ";


$categorias = listaCategorias($conexao);//conexao passada que vem do conecta.php
                                        //pegando categorias com metodo listaCategorias

?>
<h1>Alterar Cadastro</h1>
    <form action="altera-produto.php" method="POST">
       <table class="table">
           <input type="hidden" name="id" value="<?=$ProdutoDoID['id']?>"/>
           <?php include("./produto-formulario-base.php"); ?>

           <tr>
               <td></td>
               <td><input type="submit" value="Alterar Produto"></td>
           </tr>

       </table>
    </form>
<?php include_once 'rodape.php';
die();