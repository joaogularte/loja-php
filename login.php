<?php
    include 'models/conexao.php';
    include 'models/banco-usuario.php';
    include 'logica-usuario.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conexao = criaConexao();
    $usuario = consultaUsuario($conexao, $email, $senha);

    if($usuario){
        logaUsuario($email);
        header("Location: index.php?login=1");
    }else{
        header("Location: index.php?login=0");
    }
    die();
?>