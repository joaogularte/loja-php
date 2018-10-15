<?php
    
    include 'models/conexao.php';
    include 'models/banco-produto.php';

    $id = $_POST['id'];
    settype($id, "int");
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    if($_POST['usado']){
        $usado = "true";
    }else{
        $usado = "false";
    }

    $conexao = criaConexao();
    $alteracao = alteraProduto($id, $nome, $preco, $descricao, $usado, $conexao);    
    mysqli_close($conexao);

    if($alteracao){
        $msg = "<p class=".'"text-success"'.">Produto: {$nome} foi alterado.";
    }else{
        $msg = "<p class=".'"text-danger"'."> O produto {$nome} não foi alterado.";
    }

    require 'views/altera-produto.view.php'
    
?>