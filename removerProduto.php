<?php include("includes/header.php");?>
<?php require_once('src/funcao.php')?>
<?php require_once('src/config.php')?>
<?php require_once('src/redireciona.php')?>

<?php
// if para verificar se o metodo é POST 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $removerCliente = new Cliente($mysql);
    $removerCliente->remover($_POST['id']);

    redireciona('index.php');
}

?>
<section>

    <h5 class="paginaAdm">Deseja excluir este Cadastro?</h5>
<main class="contato">
    <form class="excluir-form" method="post" action="removerProduto.php">
    <p>  
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
        <button class="enviar enviar--excluir">Excluir</button> <br/>
    </p> 
    </form>
    <a href="produtos.php"> <button class="enviar enviar--excluir">voltar</button></a>
</main>

</section>
?>

<?php include("includes/footer");?>