<?php 

    include 'models/conexao.php';
    include 'models/banco-produto.php';
    include 'logica-usuario.php';          
    include 'classes/Produto.php';
    include 'classes/Categoria.php';

    verificaUsuario();

    $produto = new Produto();
    $categoria = new Categoria();
    $categoria->id = $_POST["categoria_id"];

    $produto->nome = $_POST["nome"];
    $produto->preco = $_POST["preco"];
    $produto->descricao = $_POST["descricao"];
    $produto->categoria = $categoria;
    
    if($_POST["usado"]){
        $produto->usado = "true";
    }else{
        $produto->usado = "false";
    }
    $conexao = criaConexao();
    $insercao = insereProduto($produto, $conexao); 

    if($insercao){
        $msg = "<p class=".'"text-success"'.">Produto: {$produto->nome} - R$ {$produto->preco} foi adicionado</p>";
    }else{
        $msg = "<p class=".'"text-danger"'.">O produto {$produto->nome} nao foi adicionado</p>";
    }

    mysqli_close($conexao);

    require 'views/adiciona-produto.view.php';
    
?>