<?php

    include 'classes/Categoria.php';

    function listaCategoria($conexao){
        $query = "select * from categorias";
        $categorias = array();
        $resultado = mysqli_query($conexao, $query);
        $categoria_array = mysqli_fetch_assoc($resultado);
        while($categoria_array){

            $categoria = new Categoria();
            $categoria->id = $categoria_array['id'];
            $categoria->nome = $categoria_array['nome'];
            array_push($categorias, $categoria);
            $categoria_array = mysqli_fetch_assoc($resultado);
        }
        return $categorias;
    }


?>