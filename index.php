
<?php include 'templates/cabecalho.php';
      include 'logica-usuario.php';
      include 'mostra-alerta.php';


      mostraAlerta("success");
      mostraAlerta("danger");
?>

    <h1> Bem vindo!</h1>
<?php if(usuarioEstaLogado()):?>
    <p class="alert-success">Você esta logado como <?=usuarioLogado()?>. <a href="logout.php">Deslogar</a></p>
<?php else: ?>

    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
<?php endif; ?>

<?php include 'templates/rodape.php'?>