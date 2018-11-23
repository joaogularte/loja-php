<?php include "templates/cabecalho.php"?>

    <form action="email.php" method="POST">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" class="form-control" name="email"></td>
            </tr>
            <tr>
                <td>Mensagem</td>
                <td><textarea class="form-control" name="mensagem"></textarea></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Enviar</button></td>
            </tr>
        </table>
    </form>

<?php include "templates/rodape.php"?>