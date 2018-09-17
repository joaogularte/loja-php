<?php
  
    function listaProdutos($conexao){
        $produtos = array();
        $resultado = mysqli_query($conexao, "select * from produtos");
        $produto = mysqli_fetch_assoc($resultado);
        while($produto){
            array_push($produtos, $produto);
            $produto = mysqli_fetch_assoc($resultado);
        }
        return $produtos;
    }

    function insereProduto($nome, $preco, $conexao){
        $query = "insert into produtos values (default, '{$nome}', {$preco});";
        return mysqli_query($conexao, $query);
    }

?>