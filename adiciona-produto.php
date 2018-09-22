<?php 
    include("cabecalho.php");
    include("conexao.php");
    include("banco-produto.php");
            
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $conexao = criaConexao();

    if(insereProduto($nome, $preco, $conexao)){ ?>
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