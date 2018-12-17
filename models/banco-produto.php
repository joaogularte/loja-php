<?php
    include 'classes/Produto.php';
    include 'classes/Categoria.php';

    function listaProdutos($conexao){
        $produtos = array();
        $resultado = mysqli_query($conexao, "select produtos.*, categorias.nome as categoria_nome from produtos join categorias on produtos.categoria_id = categorias.id");    
        $produto_array = mysqli_fetch_assoc($resultado);
        while($produto_array){

            $produto = new Produto();
            $categoria = new Categoria();
            
            $categoria->nome = $produto_array['categoria_nome'];

            $produto->nome = $produto_array['nome'];
            $produto->preco = $produto_array['preco'];
            $produto->descricao = $produto_array['descricao'];
            $produto->categoria = $categoria;
            $produto->usado = $produto_array['usado'];
            
            array_push($produtos, $produto);
            $produto_array = mysqli_fetch_assoc($resultado);
        }

        return $produtos;
    }

    function listaProduto($id, $conexao){
        $resultado = mysqli_query($conexao, "select * from produtos where id = {$id}");
        $produto = mysqli_fetch_assoc($resultado);
        return $produto;
    }

    function insereProduto(Produto $produto, $conexao){
        $query = "insert into produtos values (default, '{$produto->nome}', {$produto->preco}, '{$produto->descricao}', '{$produto->categoria_id}', {$produto->usado});";
        return mysqli_query($conexao, $query);
    }

    function removeProduto($conexao, $id){
        $query = "delete from produtos where id={$id}";
        return mysqli_query($conexao, $query);
    }

    function alteraProduto(Produto $produto, $conexao){
        $query = "update produtos set nome='{$produto->nome}', preco={$produto->preco}, descricao='{$produto->descricao}', usado={$produto->usado} where id={$produto->id} ";
        return mysqli_query($conexao, $query);
    }
?>