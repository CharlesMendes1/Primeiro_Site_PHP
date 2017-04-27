<?php
?>
<tr><!-- TR seria linha da tabela-->
               <td>Nome: </td><!-- TD é coluna-->
               <td><input type="text" name="nome" class="form-control" value="<?= $ProdutoDoID['nome']?>"/></td><br/><br/>
           </tr>
           <tr>
               <td>Preço: </td>
               <td><input type="text" name="preco" class="form-control" value="<?=$ProdutoDoID['preco'] ?>"></td><br/><br/>
           </tr>
           <tr>
               <td>Descrição: </td>
               <td>
                   <textarea name="descricao" class="form-control"> <?=$ProdutoDoID['Descricao']?> </textarea>
               </td>

           </tr>
           <tr>
               <td></td>
               <td>
                   <input type="checkbox" name="usado" value="true" <?=$itemUsado?>> Usado
               </td>

           </tr>

           <tr>
               <td>Categoria: </td>
               <td>
                   <select name="categoria_id">
                    <?php
                    foreach($categorias as $categoria):
                        $essaEhACategoria = $ProdutoDoID['categoria_id'] == $categoria['id'];
                        $categoriaIDSelecionada = $essaEhACategoria? "selected" :" ";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$categoriaIDSelecionada?> ><?=$categoria['nome']?></option>
                        
                    <?php
                    endforeach
                    ?>
                   </select>
               </td>

           </tr>