<?php
  
    function listaProdutos($conexao){
        $produtos = array();
        $resultado = mysqli_query($conexao, "select produtos.*, categorias.nome as categoria_nome from produtos join categorias on produtos.categoria_id = categorias.id");
        $produto = mysqli_fetch_assoc($resultado);
        while($produto){
            array_push($produtos, $produto);
            $produto = mysqli_fetch_assoc($resultado);
        }

        return $produtos;
    }

    function listaProduto($id, $conexao){
        $resultado = mysqli_query($conexao, "select * from produtos where id = {$id}");
        $produto = mysqli_fetch_assoc($resultado);
        return $produto;
    }

    function insereProduto($nome, $preco, $descricao, $categoria, $usado, $conexao){
        $query = "insert into produtos values (default, '{$nome}', {$preco}, '{$descricao}', '{$categoria}', {$usado});";
        return mysqli_query($conexao, $query);
    }

    function removeProduto($conexao, $id){
        $query = "delete from produtos where id={$id}";
        return mysqli_query($conexao, $query);
    }

    function alteraProduto($id, $nome, $preco, $descricao, $usado, $conexao){
        $query = "update produtos set nome='{$nome}', preco={$preco}, descricao='{$descricao}', usado={$usado} where id={$id} ";
        return mysqli_query($conexao, $query);
    }
?>