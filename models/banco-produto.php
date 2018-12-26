<?php
    include_once 'classes/Produto.php';
    include_once 'classes/Categoria.php';

    function listaProdutos($conexao){
        $produtos = array();
        $resultado = mysqli_query($conexao, "select produtos.*, categorias.nome as categoria_nome from produtos join categorias on produtos.categoria_id = categorias.id");    
        $produto_array = mysqli_fetch_assoc($resultado);
        while($produto_array){

            $produto = new Produto();
            $categoria = new Categoria();
            
            
            $produto->setId($produto_array['id']);
            $produto->setNome($produto_array['nome']);
            $produto->setPreco($produto_array['preco']);
            $produto->setDescricao($produto_array['descricao']);
            $produto->setCategoria($categoria);
            $produto->setUsado($produto_array['usado']);
            
            $categoria->setNome($produto_array['categoria_nome']);
            
            array_push($produtos, $produto);
            $produto_array = mysqli_fetch_assoc($resultado);
        }

        return $produtos;
    }

    function listaProduto($id, $conexao){
        
        $produto = new Produto();
        
        $resultado = mysqli_query($conexao, "select * from produtos where id = {$id}");
        $produto_array = mysqli_fetch_assoc($resultado);
        $produto->id = $produto_array['id'];
        $produto->nome = $produto_array['nome'];
        $produto->preco = $produto_array['preco'];
        $produto->descricao = $produto_array['descricao'];
        $produto->categoria = $produto_array['categoria_id'];
        $produto->usado = $produto_array['usado'];
        return $produto;
    }

    function insereProduto(Produto $produto, $conexao){
        $query = "insert into produtos values (default, '{$produto->nome}', {$produto->preco}, '{$produto->descricao}', '{$produto->categoria->id}', {$produto->usado});";
        return mysqli_query($conexao, $query);
    }

    function removeProduto($conexao, $id){
        $query = "delete from produtos where id={$id}";
        return mysqli_query($conexao, $query);
    }

    function alteraProduto(Produto $produto, $conexao){
        $query = "update produtos set nome='{$produto->nome}', preco={$produto->preco}, descricao='{$produto->descricao}', usado={$produto->usado}, categoria_id='{$produto->categoria}' where id={$produto->id} ";
        return mysqli_query($conexao, $query);
    }
?>