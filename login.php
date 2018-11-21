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
        $_SESSION["success"] = "Logado com sucesso";
        header("Location: index.php");
    }else{
        $_SESSION["danger"] = "Usuario ou senha invalido";
        header("Location: index.php");
    }
    die();
?>