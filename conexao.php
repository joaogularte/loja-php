<?php
    function criaConexao(){
        $host = 'localhost';
        $username = 'root';
        $passwd = 'root';
        $dbname = 'loja';

        $conexao = mysqli_connect($host, $username, $passwd, $dbname);
        mysqli_set_charset($conexao, "utf8");
              
        return $conexao;
    }
?>
