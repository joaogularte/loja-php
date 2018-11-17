<?php

    function usuarioEstaLogado(){
        return isset($_COOKIE["nome"]);
    }

    function verificaUsuario(){
        if(!usuarioEstaLogado()){
            header("Location: index.php?falhaDeSeguranca=true");
            die();
        }    
    }

    function usuarioLogado(){
        return $_COOKIE["nome"];
    }

    function logaUsuario($email){
        setcookie('nome', $email, time() + 300);
    }

?>