<?php 
require_once 'cabecalho.php';
//include_once 'conecta.php';
require_once 'banco-categoria.php';
require_once 'logica-usuario.php';  //OK precisa do verificaUsuario()
$categorias = listaCategorias($conexao);//conexao passada que vem do conecta.php
                                        //pegando categorias com metodo listaCategorias
verificaUsuario();
$arraycomProdutosdoID = array(); //produto
$arraycomProdutosdoID = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$itemUsado = "";
?>
<h1>Formulario de Cadastro</h1>
    <form action="adicionar-produto.php" method="POST">
       <table class=" table table-striped">
           <?php include("produto-formulario-base.php") ?>
           

           <tr>
               <td></td>
               <td><input type="submit" value="Cadastrar Produto"></td>
           </tr>

       </table>
    </form>
<?php include_once 'rodape.php';