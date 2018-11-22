<?php

    function listaCategoria($conexao){
        $query = "select * from categorias";
        $categorias = array();
        $resultado = mysqli_query($conexao, $query);
        $categoria = mysqli_fetch_assoc($resultado);
        while($categoria){
            array_push($categorias, $categoria);
            $categoria = mysqli_fetch_assoc($resultado);
        }
        return $categorias;
    }


?>