<?php
    include 'models/conexao.php';
    include 'models/banco-categoria.php';
    include 'models/banco-produto.php';

    $id = $_GET["id"];
    settype($id,"integer");
    $conexao = criaConexao();
    $categorias = listaCategoria($conexao);
    $produto = listaProduto($id, $conexao);
    $usado = $produto["usado"] ? "checked='checked'" : "";

    require 'views/produto-altera-formulario.view.php';
?>