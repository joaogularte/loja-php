<?php 
    
    include 'models/banco-categoria.php';
    include 'models/conexao.php';
    include 'logica-usuario.php';

    verificaUsuario();

    $conexao = criaConexao();
    $categorias = listaCategoria($conexao);
    $produto = [
        "nome" => "",
        "preco" => "",
        "descricao" => ""
    ];
    $usado = "";
    mysqli_close($conexao);

    require 'views/produto-formulario.view.php'
?>
    
