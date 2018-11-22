<?php include 'templates/cabecalho.php' ?>
<h1>Formulario de produto</h1>
    <form action="adiciona-produto.php" method="POST">
        <table class="table">

            <?php include 'views/formulario-base.view.php' ?>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </td>
            </tr>
        </table>
    </form>
<?php include 'templates/rodape.php' ?>