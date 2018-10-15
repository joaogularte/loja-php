<?php 
    include("conexao.php");
    include("models/banco-produto.php");

    $conexao = criaConexao();
    $produtosLoja = listaProdutos($conexao);

    mysqli_close($conexao);

    require 'views/produto-lista.view.php'
?>
