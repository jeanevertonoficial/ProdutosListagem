<?php include_once("includes/header.php");?>
<?php require_once ("src/config.php");?>
<?php require_once ("src/funcao.php");?>


<?php 

$exibirProdutos = new Cliente($mysql);
$exibirProdutos = $exibirProdutos->exibirTodos();

?>

<?php include_once("includes/footer.php");?>