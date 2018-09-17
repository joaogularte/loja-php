<?php 
    include("cabecalho.php");
    include("conexao.php");
    include("banco-produto.php");

    $produtosLoja = listaProdutos($conexao);
?>
<table class="table table-bordered">
    <?php foreach($produtosLoja as $produto):?>
        <tr>
            <td><?=$produto["nome"]?></td>
            <td><?=$produto["preco"]?></td>
        </tr>
    <?php endforeach ?>
</table>
<?php include("rodape.php");?>