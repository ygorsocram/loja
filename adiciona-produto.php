<?php
include("cabecalho.php");

$nome = $_GET["nome"];
$preco = $_GET["preco"];

$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(mysqli_query($conexao, $query)) {
?>
<p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
?>
<p class="alert-danger">O produto <? = $nome; ?> não foi adicionado</p>
<?php
}

?>

<?php include("rodape.php"); ?>