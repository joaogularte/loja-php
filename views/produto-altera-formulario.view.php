<?php include 'templates/cabecalho.php' ?>
<h1>Alterar Produto</h1>
    <form action="altera-produto.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto->id?>">
        <table class="table">
            <?php include 'views/formulario-base.view.php' ?>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Alterar</button>
                </td>
            </tr>
        </table>
    </form>


<?php include 'templates/rodape.php' ?>