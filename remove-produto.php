<?php
    include("cabecalho.php");
    include("conexao.php");
    include("banco-produto.php");

    $id = $_POST["id"];
    $conexao = criaConexao();
    $result = removeProduto($conexao, $id);
    header("Location: produto-lista.php?removido=true");
    exit();
?>
<?php include("rodape.php");?>