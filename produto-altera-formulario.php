<?php
    include 'models/conexao.php';
    include 'models/banco-categoria.php';
    include 'models/banco-produto.php';

    $id = $_GET["id"];
    echo 1;
    die();
    settype($id,"integer");
    $conexao = criaConexao();
    $categorias = listaCategoria($conexao);
    $produto = listaProduto($id, $conexao);
    $usado = $produto->usado ? "checked='checked'" : "";
    mysqli_close($conexao);

    require 'views/produto-altera-formulario.view.php';
?>