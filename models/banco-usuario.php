<?php

    function consultaUsuario($conexao, $email, $senha){
        $senhaMd5 = md5($senha);
        $query = "select * from usuario where email='{$email}' and senha='{$senhaMd5}'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

?>