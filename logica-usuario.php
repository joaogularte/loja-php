<?php

    session_start();

    function usuarioEstaLogado(){
        return isset($_SESSION ["nome"]);
    }

    function verificaUsuario(){
        if(!usuarioEstaLogado()){
            $_SESSION["danger"] = "Você não tem acesso!";
            header("Location: index.php");
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
        session_start();
    }
?>

