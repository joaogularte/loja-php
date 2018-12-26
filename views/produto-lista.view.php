<?php include 'templates/cabecalho.php' ?>

<?= $msg ?>
<table class="table table-bordered">
    <?php foreach($produtosLoja as $produto):?>
        <tr>
            <td><?=$produto->nome?></td>
            <td><?=$produto->getPreco()?></td>
            <td><?=$produto->precoComDesconto()?></td>
            <td><?=substr($produto->descricao, 0, 40)?></td>
            <td><?=$produto->categoria->nome?></td>
            <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto->id?>">Alterar</a></td>
            <td>
                <form action="./remove-produto.php" method="POST">
                    <input type="hidden" name="id" value="<?=$produto->id?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<!-- <p class="alert-success">Produto apagado com sucesso.</p> -->

<?php include  'templates/rodape.php' ?>