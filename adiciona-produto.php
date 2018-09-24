<?php 
    include 'cabecalho.php';
    include 'conexao.php';
    include 'banco-produto.php';
            
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria_id"];
    if($_POST["usado"]){
        $usado = "true";
    }else{
        $usado = "false";
    }
    $conexao = criaConexao();

    if(insereProduto($nome, $preco, $descricao, $categoria, $usado, $conexao)){ ?>
        <p class="text-success">
            Produto: <?php echo $nome; ?> - R$ <?php echo $preco; ?> foi adicionado
        </p>        
    <?php }else{ 
        $msg = mysqli_error($conexao);    
    ?>
        <p class="text-danger">O produto <?php echo $nome; ?> não foi adicionado: <?= $msg?></p>
    <?php }
    
    mysqli_close($conexao);
    ?>


<?php include("rodape.php");?>