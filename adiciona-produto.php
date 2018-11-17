<?php 

    include 'models/conexao.php';
    include 'models/banco-produto.php';
    include 'logica-usuario.php';          
    
    verificaUsuario();

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria_id"];
    if($_POST["usado"]){
        $usado = "true";
    }else{
        $usado = "false";
    }
    $conexao = criaConexao();
    $insercao = insereProduto($nome, $preco, $descricao, $categoria, $usado, $conexao); 

    if($insercao){
        $msg = "<p class=".'"text-success"'.">Produto: {$nome} - R$ {$preco} foi adicionado</p>";
    }else{
        $msg = "<p class=".'"text-danger"'.">O produto {$nome} nao foi adicionado</p>";
    }

    mysqli_close($conexao);

    require 'views/adiciona-produto.view.php';
    
?>