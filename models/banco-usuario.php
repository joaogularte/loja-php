<?php

    function consultaUsuario($conexao, $email, $senha){
        $senhaMd5 = md5($senha);
        $email = mysqli_real_escape_string($conexao, $email);
        var_dump($email);
        $query = "select * from usuario where email='{$email}' and senha='{$senhaMd5}'";
        var_dump($query);
    
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

?>