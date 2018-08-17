<?php include ("cabecalho.php"); ?>

<?php
$nome = $_GET['nome'];
$preco = $_GET['preco'];
$conexao = mysqli_connect("localhost", "root", "", "loja");

function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome, preco) values ('{$nome}', '{$preco}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

if(insereProduto($conexao, $nome, $preco)) {
?>
<p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
?>
<p class="alert-danger">O produto <? = $nome; ?> não foi adicionado</p>
<?php
}
?>

<?php include ("rodape.php"); ?>