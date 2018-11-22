<?php
    include 'models/conexao.php';
    include 'models/banco-produto.php';

    $id = $_POST["id"];
    $conexao = criaConexao();
    $result = removeProduto($conexao, $id);
    if($result){
        $msg = "<p class=".'"alert-success"'.">Produto apagado com sucesso.</p>";
    }
    mysqli_close($conexao);
    
    require 'views/produto-lista.view.php'
?>