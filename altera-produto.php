<?php
    
    include_once 'models/conexao.php';
    include_once 'models/banco-produto.php';
    include_once 'classes/Produto.php';
    include_once 'classes/Categoria.php';

    $produto = new Produto();

    $produto->id = $_POST['id'];
    settype($produto->$id, "int");
    $produto->nome = $_POST['nome'];
    $produto->preco = $_POST['preco'];
    $produto->descricao = $_POST['descricao'];
    $produto->categoria = $_POST['categoria_id'];
    if($_POST['usado']){
        $produto->usado = "true";
    }else{
        $produto->usado = "false";
    }

    $conexao = criaConexao();
    $alteracao = alteraProduto($produto, $conexao);    
    mysqli_close($conexao);

    if($alteracao){
        $msg = "<p class=".'"text-success"'.">Produto: {$produto->nome} foi alterado.";
    }else{
        $msg = "<p class=".'"text-danger"'."> O produto {$produto->nome} não foi alterado.";
    }

    require 'views/altera-produto.view.php'
    
?>