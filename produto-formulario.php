<?php 
    
    include 'models/banco-categoria.php';
    include 'conexao.php';

    $conexao = criaConexao();
    $categorias = listaCategoria($conexao);

    mysqli_close($conexao);

    require 'views/produto-formulario.view.php'
?>
    
