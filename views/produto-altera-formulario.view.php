<?php include 'templates/cabecalho.php' ?>
<h1>Alterar Produto</h1>
    <form action="altera-produto.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto["id"]?>">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" value="<?=$produto["nome"]?>"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="preco" value="<?=$produto["preco"]?>"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea class="form-control" name="descricao"><?=$produto["descricao"]?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado</td>
            </tr>
            <tr>
                <td> Categoria </td>
                <td>
                    <select class="form-control" name="categoria_id">
                        <?php foreach($categorias as $categoria):
                            if($produto["categoria_id"] == $categoria["id"]){
                                $selecao = "selected='selected'";
                            }else{
                                $selecao = "";
                            }
                        ?>
                            <option value="<?=$categoria["id"]?>" <?=$selecao?>>
                                <?=$categoria["nome"]?>
                            </option>
                        <?php endforeach?> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>


<?php include 'templates/rodape.php' ?>