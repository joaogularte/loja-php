<?php

    session_start();

    function usuarioEstaLogado(){
        return isset($_SESSION ["nome"]);
    }

    function verificaUsuario(){
        if(!usuarioEstaLogado()){
            header("Location: index.php?falhaDeSeguranca=true");
            die();
        }    
    }

    function usuarioLogado(){
        return $_SESSION["nome"];
    }

    function logaUsuario($email){
        $_SESSION["nome"] = $email;
    }

    function logout(){
        session_destroy();
    }
?>